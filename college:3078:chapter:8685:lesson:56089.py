import os


def explore(ttype, address):
    if  not os.path.exists(address):
        return "your address is wrong"
    ttype = ttype.lower()
    dic_explore = dict()
    dic = list(os.walk(address))
    for i in dic:
        counter = 0
        for j in i[2]:
            if ttype in j:
                counter += 1
        if counter > 0 :
            dic_explore[i[0]] = counter
    
    
    return dic_explore
