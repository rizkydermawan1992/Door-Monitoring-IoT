/*  SMARTDOOR IOT */

   
//----------------LIBRARIES----------------
  #include <WiFi.h>
  #include <HTTPClient.h>
  #include <ArduinoJson.h>
//-----------------------------------------

const char* ssid = "xxxxxx"; //Silakan isi dengan nama SSID
const char* password = "xxxxxx"; //Siakan isi dengan password

// Buat object http
 HTTPClient http;

//sesuaikan dgn ip dan direktori penyimpanan file php anda
String url = "http://192.168.1.10/smartdoor/getdata.php?";
String payload;

int query = 0;
const int pinDoor = 13;
String doorState;
const int buzzer = 2;

void alarmOn(){
  for(int i = 0; i<3; i++){
    digitalWrite(buzzer, HIGH);
    delay(300);
    digitalWrite(buzzer, LOW);
    delay(300);
  }
}

void setup () {

  Serial.begin(9600);
  WiFi.begin(ssid, password);

    pinMode(pinDoor, INPUT);
    pinMode(buzzer, OUTPUT);
    
    while (WiFi.status() != WL_CONNECTED) {
        Serial.println("Connecting...");
        delay(1000);
     }
  
 if(WiFi.status() == WL_CONNECTED) {
    Serial.println("Connected...!!!");
 }
  
}

void loop() {

  int door = digitalRead(pinDoor);
  
  if(door == 0){
    doorState = "Pintu Terbuka";
  }
  else{
    doorState = "Pintu Tertutup";
  }
  

  
 
  if (WiFi.status() == WL_CONNECTED) {
      
        http.begin(url + "door=" + String(door)); 
         
        int httpCode = http.GET();

        if (httpCode > 0){
          char json[500];
          String payload = http.getString();
          payload.toCharArray(json, 500);

           DynamicJsonDocument doc(JSON_OBJECT_SIZE(2));
           // Deserialize the JSON document
           deserializeJson(doc, json);
           String alarm  = doc["alarm"];
        
       
            Serial.print("HTTP Response= ");
            Serial.println(httpCode);
            Serial.println(doorState);
            Serial.println("---------------------------");

            if(alarm == "1" && door == 0){
                alarmOn();
            }
            else{
               digitalWrite(buzzer, LOW);
            }
        }
        else{
          Serial.println("Failed Connect to Server");
        }
     
   }
  else {
    Serial.println("Disconnected!!!");
  }
}
