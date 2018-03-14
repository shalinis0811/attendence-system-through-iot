
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>

int statuss = 0;
int out = 0, wcount, blink_delay=20;

unsigned int tcount=0;

String url_string;
byte letter;

const char* ssid     = "Tekcircuits R&D Lab";
const char* pass = "key#@ctpl12345$#";
const char* server = "192.168.0.151";

const char* server1 = "52.33.33.53";
const char* url1 = "GET /iot/api/user/ukey=DR0MIGCPSE8KPC1RUXJP9FXZQSOO1VTL&mode=248&skey=7PEC3RJV/";
WiFiClient client;
void setup() 
{
  pinMode(D4 ,OUTPUT); digitalWrite(D4, LOW); 
  pinMode(D0, OUTPUT); digitalWrite(D0, HIGH);
  
   Serial.begin(115200);
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
  
  // Initiate a serial communicatio
  tcount = 1001;
}

void loop() 
{
  
  if(tcount > 1000)
  {
    url_string = String(url1);
    url_string += "in1=";
    url_string += String(analogRead(17));
    url_string += "&in2=";
    url_string += String(wcount);
    url_string += "&in3=";
    url_string += String(analogRead(17));
    url_string += "&in4=";
    url_string += String(0);
    url_string += " HTTP/1.1";
    
  //digitalWrite(D4, HIGH);
  if (client.connect(server1,80) ) {
    client.println(url_string);
    client.println("Host: 52.33.33.53"); 
    client.println("Connection: close");
    client.println();
    Serial.println(url_string);
    
    }
   if(client.available()){
      String line = client.readStringUntil('\r'); 
      Serial.println(line);   
  }
  Serial.println("out connnection");
    tcount = 0;
  }

  tcount++;

    if(client.available()){
      String line = client.readStringUntil('\r'); 
      Serial.println(line);
  }

  
delay(10);  
}



