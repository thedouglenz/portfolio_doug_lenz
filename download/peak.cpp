#include <stdio.h>
#include <fstream>
#include <string>
#include <iostream>
using namespace std;

/* CSCI 484
 * Douglas Lenz
 * Peak
 *
 * Finds the 'peak' value in an array of integers
 * with the property of ascending to a value
 * and descending thereafter.
 *
*/

// function peak takes the array A, the index of the first element start, the index of the last element end
// returns the index of the 'peak' element
int peak(int A[], int start, int end) {
	int midpoint = start + ((end - start) / 2);
	
	if(A[midpoint] < A[midpoint+1]) { // The elements are still increasing
		return peak(A, midpoint, end);
	} else if (A[midpoint] > A[midpoint+1] && A[midpoint-1] < A[midpoint]) { // The elements are decreasing AND we found the peak
		return midpoint;
	} else { // The elements are decreasing
		return peak(A, start, midpoint-1);
	}
}


int main() {
	// Initialize pointer to start of array A, array length, filename, file input stream
	int *A;
	int length=0;
	char* filename="peak.txt";
	ifstream read_array_from_file(filename);

	if(!read_array_from_file) {
		cout << "Problem opening " << filename << "\n" ;
		cin.ignore();
		return 0;
	}
	
	// get the length of the input file and return to the beginning of the file
	int count_line;
	while(read_array_from_file >> count_line) {
		cout << count_line << " " ;
		length++;
	}
	cout << "\n";
	read_array_from_file.clear();
	read_array_from_file.seekg(0,ios::beg);

	// Dynamically allocate array space large enough for the data in the data file
	A = new int[length];
	
	// read numbers from file
	// n to store the next number, i to index the correct element
	int n=0, i=0; 
	while(read_array_from_file >> n) {
		A[i] = n;
		i++;
	}

	// Call the peak function ( the one that does the actual work )
	int result = peak(A, 0, length-1);

	// Print the result to the screen
	cout << "Peak Index: "  << result << "\n";

	// Wait for user to press any key and exit
	cin.ignore();
	return 0;
}