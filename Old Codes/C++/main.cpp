#include <iostream>

// Program to draw midpoint ellipse using  Algorithm

#include <stdio.h>
#include <conio.h>
#include <graphics.h>

int algorithm (int xc, int yc, int rx, int ry)
{
    int x=0,y=ry;
    float p1=ry*ry-rx*rx*ry+0.25*rx*rx;

    float dx=2*ry*ry*x;
    float dy=2*rx*rx*y;
    while (dx<dy)
    {
        printf("x=%d,y=%d\n",x,y);
        if (p1<0)
        {
            x=(x+1);
            p1=p1+2*ry*ry*x+ry*ry;
            dx=2*ry*ry*x;
        }
        else {
            x=x+1;
            y=y-1;

            p1=p1+2*ry*ry*x-2*rx*rx*y+ry*ry;
            dy=2*rx*rx*y;
            dx=2*ry*ry*x;
        }
    }

}
int main()
{
     int gd = DETECT, gm;
     int xc, yc, rx, ry;
     char ch;

     initgraph(&gd, &gm, (char*)" ");
     do
     {

          printf("\nEnter the centre of ellipse :\n");
          scanf("%d%d", &xc, &yc);
          printf("Enter the radii of major and minor axes :\n");
          scanf("%d%d", &rx, &ry);
          cleardevice();
        algorithm(xc,yc,rx,ry);

     }
        while ((ch == 'y') || (ch == 'Y'));
        closegraph();
}
