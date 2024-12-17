#include <Servo.h>

typedef struct Fires{
  int green;
  int red;
  int yellow;
  }Fires;


const int places[4] = {A0, A1, A2, A3};
const int presence= A4;

Servo gate;
Fires fire1={2,3,4};

int count=0;

int busy(int pin);
void parking();
void light(int pin1, int pin2, int pin3, int times);
void fires(Fires fire);

void setup() {
  for(int i=2; i<9; i++){
    pinMode(i, OUTPUT);
    digitalWrite(i, LOW);
    }
  Serial.begin(9600);
  gate.attach(9);
}

void loop() {
  parking();
  fires(fire1);
}

int busy(int pin){
   return (analogRead(pin)<900)? 1:0;
  }

void parking(){
  for(int j=0; j<4; j++){
     if(!busy(places[j])) count+=1;
    }
  
  Serial.print("Nombre de places restantes: ");
  Serial.println(count);

  if(busy(presence) && count > 0){
    gate.write(180);
    Serial.println("Voiture presente");
    }

  Serial.println("**********************************************************************************************");

  delay(1000);
  gate.write(0); count =0; }

void light(int pin1, int pin2, int pin3, int times){
  digitalWrite(pin1, HIGH);
  digitalWrite(pin2, LOW);
  digitalWrite(pin3, LOW);
  delay(times);  
  }


void fires(Fires fire){
  light(fire.green, fire.yellow, fire.red, 2000);
  light(fire.yellow, fire.green, fire.red, 500);
  light(fire.red, fire.yellow, fire.green, 1000);
  }
