#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{

    int *p;

    p = (int *)malloc(sizeof(int));

    if (p == NULL)
    {

        printf("erro\n");
    }
    else
    {

        *p = 54;

        printf("endereco do ponteiro: %x\nValor contido em p: %d", &p, *p);
    }

    return 0;
}