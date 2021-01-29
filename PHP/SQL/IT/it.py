from bs4 import BeautifulSoup
import urllib.request as req
from urllib.parse import urljoin

base = "https://www.fe-siken.com/s/keyword/"
urls = ['xa.html', 'xi.html', 'xu.html', 'xe.html', 'xo.html', 'ka.html', 'ki.html', 'ku.html', 'ke.html', 'ko.html', 'sa.html', 'si.html', 'su.html', 'se.html', 'so.html', 'ta.html', 'ti.html', 'tu.html', 'te.html', 'to.html', 'na.html', 'ni.html', 'nu.html', 'ne.html', 'no.html', 'ha.html', 'hi.html', 'hu.html', 'he.html', 'ho.html', 'ma.html', 'mi.html', 'mu.html', 'me.html', 'mo.html', 'ya.html', 'yu.html', 'yo.html', 'ra.html', 'ri.html', 'ru.html', 're.html', 'ro.html', 'wa.html'] 
with open('SQL/IT/CountMistake.sql','w',encoding='utf-8') as f:
  for url in urls:
    res = req.urlopen(urljoin(base,url))
    soup = BeautifulSoup(res,"html.parser")
    datas = soup.select('.keywordBox')
    for data in datas:
      try:
        a,b= data.find('p').text,0
      except AttributeError:
        continue
      f.write("INSERT INTO CountMistake ( メソッド,間違えた回数 ) VALUES ( '{}','{}' );\n".format(a,b))