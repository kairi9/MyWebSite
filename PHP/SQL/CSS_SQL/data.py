from bs4 import BeautifulSoup
import urllib.request as req
from urllib.parse import urljoin

url = 'http://www.htmq.com/css3/'
res = req.urlopen(url)
soup = BeautifulSoup(res,"html.parser")
datas = soup.select('.itemsbody')
urlDatas = []
parsed_datas = []
d = soup.select('.itemsbody > a')

metho_expl = {}
metho_link = {}

for data in d:
  metho_link[data.text] = urljoin(url,data.get('href'))

with open("SQL/CSS_SQL/base_data.txt","r",encoding="utf-8") as f:
  for i in f:
    a,b = i.replace("\n","").split(" …… ")
    metho_expl[a] = b

with open('./SQL/CSS_SQL/CSS_table.sql','w',encoding='utf-8') as h:
  h.write('CREATE TABLE CSS (  メソッド VARCHAR(100), 出来ること VARCHAR(500), リンク VARCHAR(500)  );\n')
  print(len(metho_expl))
  for c,e in metho_expl.items():
    try:
      h.write("INSERT INTO CSS ( メソッド,出来ること,リンク ) VALUES ( '{}','{}','{}' );\n".format(c,e,metho_link[c]))
    except KeyError:
      h.write("INSERT INTO CSS ( メソッド,出来ること,リンク ) VALUES ( '{}','{}','{}' );\n".format(c,e,"null"))