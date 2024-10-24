#include <iostream>
#include <strstream>
#include <iomanip>
#include <cmath>
using namespace std;
int main() {

    int k = -777;
    cout << setiosflags (0xFFFF);

    cout << setw(10) << setfill('&');
    cout << setbase(0) << k << "\t" << setw(10) << setfill('$') << setbase(8) << (-k) << "\t";
    cout << setbase(10) << k << "\t" << setbase(16) << k << endl;
    cout << resetiosflags(0xFFF);
    cout <<k<<"\t"<<oct<<kk


    return 0;
}