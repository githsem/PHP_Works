from selenium import webdriver
from selenium.webdriver.chrome.options import Options


options = Options()
options.headless = True
options.add_argument("--window-size=1920,1200")

driver = webdriver.Chrome(executable_path='/Users/Hasan/Downloads/chromedriver')
driver.get("https://moodle.hs-hannover.de/login/index.php")
print(driver.page_source)


h1 = driver.find_element_by_name('maincontent')
print(h1)