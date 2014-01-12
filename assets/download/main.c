#include <stdio.h>
#include <stdlib.h>

// Simple C vector addition program. Requests a size for the vectors, the elements of each vector, and computes their addition.
// 2014 Douglas Lenz

void addVectors(float *a, float *b, float *c, int vector_size) {
    int i;
    for (i=0; i<vector_size; ++i) {
        c[i] = a[i] + b[i];
    }
}

int main() {
    float *a, *b, *c;
    int i, j, k, SIZE;

    printf("Enter vector size: ");
    scanf("%d", &SIZE);

    int alloc_size = SIZE * sizeof(float);
    a = malloc(alloc_size);
    b = malloc(alloc_size);
    c = malloc(alloc_size);

    for(i=0; i<SIZE; ++i) {
        printf("Enter element %d of vector 1: ", i);
        scanf("%f", &a[i]);
        c[i] = 0;
    } puts("\n");
    for(j=0; j<SIZE; ++j) {
        printf("Enter element %d of vector 2: ", j);
        scanf("%f", &b[j]);
    } puts("\n");

    printf("Vector 1: \n[");
    for (i=0; i<SIZE; ++i) {
        printf("%f  ", a[i]);
    } puts("]");

    printf("Vector 2: \n[");
    for (j=0; j<SIZE; ++j) {
        printf("%f  ", b[j]);
    } puts("]");

    // add the two vectors
    addVectors(a, b, c, SIZE);

    printf("Sum of vector 1 and vector 2: \n[");
    for (k=0; k<SIZE; ++k) {
        printf("%f  ", c[k]);
    } puts("]");

    return 0;
}
