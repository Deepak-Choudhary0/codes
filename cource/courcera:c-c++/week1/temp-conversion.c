/*Conversion of Fahrenheit to Celcius*/
#include <stdio.h>
int main(void){
    int fahrenheit,celcius;
    printf("Please enter fahrenheit as an integer:");
    scanf("%d",&fahrenheit);
    celcius= (fahrenheit -32)/1.8; //note conversion
    printf("\n %d fahrenheit is %d celcius.\n",fahrenheit,celcius);
    return 0;
}