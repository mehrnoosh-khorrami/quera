import json
import re

n = int(input())
datadict = dict()
printlist = list()
for i in range(0, n):
    line = str(input())
    if re.match('.+:=*.+', line):
        datalist = (re.split(':=', line))
        if re.match(' \[.+', datalist[1]):
            data = (re.split(' \[',datalist[1]))[1]
            data = re.split('\]',data)[0]
            data = re.split(', ', data)
            a = datalist[0]
            a = a[:-1]
            datadict[a] = data
        elif re.match(' \{.+', datalist[1]):
            data = (re.split(' \{',datalist[1]))[1]
            data = (re.split('\}',data))[0]
            data = re.split(', ', data)
            dic = dict()
            for m in data:
                d = re.split(': ', m)
                d2 = d[0]
                d2 = (re.split('\"', d[0]))[1:-1]
                # print(d2[0], ":", d[1])
                dic[d2[0]] = d[1]
            t = datalist[0]
            t = t[:-1]
            datadict[t] = dic
    else:
        if re.match('[print].+', line):
            line = line[6:]
            if re.match('.+(\[\").+', line):
                x = line.find("[")
                egdic = datadict[line[:(x)]]
                printlist.append(egdic[line[x + 2 : -2]])
            else:
                y = line.find("[")
                egdic = datadict[line[:(y)]]
                printlist.append(egdic[int(line[y + 1 : -1])])

for j in printlist:
    print(j)