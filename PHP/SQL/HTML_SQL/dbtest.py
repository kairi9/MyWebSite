from bs4 import BeautifulSoup
import urllib.request as req
from urllib.parse import urljoin

url = 'http://www.htmq.com/html5/'
res = req.urlopen(url)
soup = BeautifulSoup(res,"html.parser")
datas = soup.select('.itemsbody')
urlDatas = []
parsed_datas = []
d = soup.select('.itemsbody > a')

with open('./SQL/url_data.txt','w',encoding='utf-8') as f:
  for e in d:
    f.write(f'{urljoin(url,e.get("href"))}\n')