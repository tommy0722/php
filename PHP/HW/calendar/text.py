
import requests
from bs4 import BeautifulSoup

headers = {'user-agent':'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Safari/605.1.15'}
url="http://220.128.133.15/mackliu/11001/02"
r = requests.get("http://220.128.133.15/mackliu/11001/02", headers = headers)
r.encoding = "utf8"
soup = BeautifulSoup(r.text, "lxml")
print(soup)