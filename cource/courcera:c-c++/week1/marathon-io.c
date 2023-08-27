/* The distance of a marathan in kilometers*/
#include <stdio.h>
int main(void){
    int miles, yards;
    printf("Enter the miles ans yards respectively:");
    scanf("%d%d",&miles,&yards);
    double kilometers;
    kilometers = 1.609 * (miles+yards / 1760.0);
    printf("\nA marathon is %lf kilometers.\n\n",kilometers);
    return 0;
}