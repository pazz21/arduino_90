void setup() {
Serial.begin(9600);
//set the LED pin to OUTPUT
pinMode(13, OUTPUT);
}

void loop() {
//wait until the serial connection is open
while (Serial.available() == 0);

//read from the serial connection; the - '0' is to cast the values as the int and not the ASCII code
int val = Serial.read();

//print to the console for testing
Serial.println(val);

//if we've recieved a '1', turn on the LED and print a message
if(val=='a'){
Serial.println("Received a 1");
digitalWrite(13, HIGH);
}
//if we've recieved a '0', turn off the LED and print a message
if(val=='b'){
Serial.println("Received a 0");
digitalWrite(13, LOW);

}
}
