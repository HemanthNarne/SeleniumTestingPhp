   System.setProperty("webdriver.chrome.driver","C:\\Software\\chromedriver.exe");
WebDriver driver = new ChromeDriver();
driver.get("http://localhost/selenium/action_page.php ");	
String inputNumber1 = "22";
String inputNumber2 = "35";
String inputNameField = "VipulC";
int noOfCheckBoxes = 3;
driver.findElement(By.xpath("/html/body/form/input[1]")).sendKeys(inputNameField);
Thread.sleep(1000);
driver.findElement(By.xpath("/html/body/form/input[2]")).sendKeys(inputNumber1);
Thread.sleep(1000);
driver.findElement(By.xpath("/html/body/form/input[3]")).sendKeys(inputNumber2);
Thread.sleep(1000);
for(int i=1; i< noOfCheckBoxes; i++) {
int specificXpath = 7+i;
String pathFirstPart = "/html/body/form/input[";
String pathLastPart = "]";
String pathX = pathFirstPart +specificXpath+ pathLastPart;
driver.findElement(By.xpath(pathX)).click();
}
Thread.sleep(1000);
driver.findElement(By.xpath("/html/body/form/input[10]")).submit();
Thread.sleep(1000);
String content = driver.findElement(By.xpath("/html/body")).getText();
String actualValueString = content.substring(16, 18);
actualValueString.trim();
Integer tAct1 = Integer.valueOf(inputNumber1);
Integer tAct2 = Integer.valueOf(inputNumber2);
int expectedOutput = tAct1+tAct2;
Integer actualOutput = Integer.valueOf(actualValueString);
if(actualOutput == expectedOutput) {
System.out.println("Sum of numbers is correct. Your test case is successful");
}
else {
System.out.println("Sum of numbers is not correct. Your test case failed");
}
String outputName= content.substring(6, 9);
if(inputNameField.equals(outputName))
{
System.out.println("Name printed is correct. Your test case is successful");
}
else
{
System.out.println("Test case failed for the Name");
}
String valFromNextPage = content.substring(72, 73);
String valFromNextPage1 = valFromNextPage.trim();
int intValue = Integer.parseInt(valFromNextPage1);
if (noOfCheckBoxes == intValue) {
System.out.println("Test case passed for hobbies count");
}
else
{
System.out.println("Test case failed for the hobbies count");
}

    }
    
}