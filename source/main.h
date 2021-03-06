#ifndef MAIN_H
#define MAIN_H

#include "classes/Challenge.h"
#include "error.h"

#include <iostream>
#include <fstream>

using namespace std;

extern Challenge *challenge;
extern Challenge *tmp_challenge;

extern ParamTable *param_table;
extern ParamTable *tmp_param_table;

extern int maze_parse(const char* fname);
extern int param_parse(const char* fname);
extern FILE* param_in;
extern FILE* maze_in;

/************************ Prótotipos das funções ************************/
struct Error{
	const char* fname;
	int line;
	int column;
 	char* s;
	char* yytext;
	char* num;
	double d;
};

extern Error error;

void gridOutputXML(ofstream& file);
void labOutputXML(ofstream& file);
void paramOutputXML(ofstream& file, ParamTable *param_table);
void URDFOutputFixed(ofstream& file);
void URDFOutputRotate(ofstream& file);
void ErrorHandlingWithExit(int);
void ErrorHandling(int);
int  menu(int argc, char* argv[]);
int  commandLineTools(int argc, char* argv[]);

#endif
