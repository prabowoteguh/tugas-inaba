#include <stdio.h>
#define max 10
int S[max];
int i,k,top;
void create()
{
top=0;
}
int full()
{
if (top == max-1) return 1;
else return 0;
}

void push( int e )
{
if (full()) printf(" Stack penuh Coy \n");
else {
top = top + 1;
S[top] = e;
}
}
int empty()
{
if (top == 0 ) return 1;
else return 0;
}
void pop( int *e)
{
if (empty()) printf(" Stack kosong mas ! \n");
else {
*e = S[top];
top = top - 1;
}
}

void main()
{
create();
pop (&k);
push (70);
push(80);
push (30);
push(40);
for (i=4; i<=10; i++) push(i);
printf ("lihat 4 elemen stack yang teratas \n");  for(i=1;i<=4;i++) {
pop(&k);
printf("%5d \n",k);
}
clear();
pop(&k);
