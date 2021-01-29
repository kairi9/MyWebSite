url_data = []
data = []

with open("SQL/HTML_SQL/url_data.txt","r",encoding="utf-8") as f:
  for i in f:
    url_data.append(i.replace("\n",""))

with open("SQL/HTML_SQL/data.txt","r",encoding="utf-8") as g:
  for j in g:
    data.append(j.replace("\n","").split(" …… "))

total_data = list(zip(data,url_data))
with open('SQL\HTML_SQL\HTML_table.sql','w',encoding='utf-8') as h:
  h.write('CREATE TABLE HTML (  メソッド VARCHAR(100), 出来ること VARCHAR(500), リンク VARCHAR(500)  );\n')
  for data in total_data:
    h.write("INSERT INTO HTML ( メソッド,出来ること,リンク ) VALUES ( '{}','{}','{}' );\n".format(data[0][0],data[0][1],data[1]))