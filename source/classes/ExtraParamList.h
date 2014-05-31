#include <iostream>
#include <vector>
/* http://www.cplusplus.com/reference/std::vector/std::vector/ */

struct Param{
    char* name;
    char* value;
};

struct ParametersClass{
    char* class_name;
    std::vector<Param>  *paramList;
};

class ExtraParamList{
    private:
    std::vector<ParametersClass>  *parametersClassList;

	public:
    ExtraParamList(){ parametersClassList = new std::vector<ParametersClass>();}
    void addClass(ParametersClass add);
    void addParameterToClass(char* class_name, Param param);
    std::vector<ParametersClass> getExtraParamList();

    void printTest();
};