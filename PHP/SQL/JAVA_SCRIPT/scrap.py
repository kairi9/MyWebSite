import urllib.request as req
from bs4 import BeautifulSoup
from urllib.parse import urljoin

url = "http://www.htmq.com/js/"
a = req.urlopen(url)
soup = BeautifulSoup(a,"html.parser")
datas = soup.select('.itemsbody')

with open('SQL/JAVA_SCRIPT/JavaScript_table.sql','w',encoding='utf-8') as f:
  f.write('CREATE TABLE JAVASCRIPT (  メソッド VARCHAR(100), 出来ること VARCHAR(500), リンク VARCHAR(500)  );\n')
  for data in datas:
    method_text_href = data.find_all('a')
    for d in method_text_href:
      f.write("INSERT INTO JAVASCRIPT ( メソッド,出来ること,リンク ) VALUES ( '{}','{}','{}' );\n".format(d.text,d.next_sibling.replace(' …… ',''),urljoin('http://www.htmq.com/js/',d.get('href'))))