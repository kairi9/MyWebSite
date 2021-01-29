datas = {}
with open("SQL/CSS_SQL/base_data.txt","r",encoding="utf-8") as f:
  for i in f:
    a,b = i.replace("\n","").split(" …… ")
    datas[a] = b

for  keys,value in datas.items():
  print(keys,value)