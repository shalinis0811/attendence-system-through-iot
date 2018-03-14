
/* 
	Tekcircuits R&D Lab Tutorial 
	
	The circuit:
	* Simple code upload the tempeature and humidity data using thingspeak.com
	* Hardware: NodeMCU with LM35
	
	Copyrighted to Tekcircuits R&D Lab
*/
#include <ArduinoJson.h>
#include <String.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
 
// Wifi Credentials to connect LAN or Internet
 
const char* ssid     = "ssid";
const char* pass = "pass";

// Server Credentials
const char* host = "52.33.33.53";
const char* url = "GET /iot/api/user/ukey=jsdjsdlfkdshjdlk&mode=249&dkey=jjjjj/switches HTTP/1.1";

//const char* url = iot1/api/user/ukey=ZJA52LXLE1S3WJFL0B0SYAU74REDSUVN&mode=249&dkey=2LT2GIVL/switches

// Objects
WiFiClient client;
HTTPClient http;
void setup() 
{
      pinMode(16, OUTPUT); digitalWrite(16,1);
      Serial.begin(115200);
      delay(10);
      Serial.println("Connecting to ");
      Serial.println(ssid);
      WiFi.begin(ssid, pass);
      
     while (WiFi.status() != WL_CONNECTED) 
     {
         delay(500);
         Serial.print(".");
     }
      Serial.println("");
      Serial.println("WiFi connected");
      digitalWrite(16,0);
}
 
void loop() 
{

   if (!client.connect("52.33.33.53", 80)) {
    Serial.println(F("Connection failed"));
    return;
  }


String line = client.readStringUntil('\r');
    Serial.println(line);
    
    Serial.println(F("Connected!"));

  // Send HTTP request
  client.println(F("GET /iot/api/user/ukey=&mode=249&dkey=/switches HTTP/1.1"));
  client.println(F("Host: 52.33.33.53"));
  client.println(F("Connection: close"));
  if (client.println() == 0) {
    Serial.println(F("Failed to send request"));
    return;
  }

  Serial.println("checking the status");
  char status[32] = {0};
  client.readBytesUntil('\r', status, sizeof(status));
  if (strcmp(status, "HTTP/1.1 200 OK") != 0) {
    Serial.print(F("Unexpected response: "));
    Serial.println(status);
    return;
  }

  Serial.println("Headers Read");
 
  char endOfHeaders[] = "\r\n\r\n";
  if (!client.find(endOfHeaders)) {
    Serial.println(F("Invalid response"));
    return;
  }

  String json_data = client.readStringUntil('\r');
  Serial.println(json_data);
  
   DynamicJsonBuffer jsonBuffer;
  // Parse JSON object
  JsonObject& root = jsonBuffer.parseObject(json_data);
  
  if (!root.success()) {
    Serial.println(F("Parsing failed!"));
    //return;
  }
  int control = root["IP_VALUE1"];
  analogWrite(D4,control);

  control = root["IP_VALUE3"];
  if(control == 1) control = 0;
  else control = 1;
  digitalWrite(D0, control);
  // Extract values
  
  Serial.println(control);
  Serial.println(F("Response:"));
  Serial.println(root["IP_VALUE1"].as<char*>());
  Serial.println(root["IP_VALUE2"].as<char*>());
  Serial.println(root["IP_VALUE3"].as<char*>());
  Serial.println(root["IP_VALUE4"].as<char*>());

  // Disconnect
  client.stop(); //delay(2000);

}
