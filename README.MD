System.setProperty("webdriver.chrome.driver", "C:\\Software\\chromedriver.exe");
//Initialize variable for chrome driver
        WebDriver driver = new ChromeDriver();
//Get the url of the application
        driver.get("http://localhost/selenium/action_page.php ");
//Declare few variable which would be useful in the application.
        String inputNameField = "Raechel";
        String inputNumber1 = "15";
        String inputNumber2 = "20";
        String inputGender = "Female";

// Enter the above declared values in the input fields. Find the input fields through xpath
        driver.findElement(By.xpath("/html/body/form/input[1]")).sendKeys(inputNameField);
        Thread.sleep(1000);
        driver.findElement(By.xpath("/html/body/form/input[2]")).sendKeys(inputNumber1);
        Thread.sleep(1000);
        driver.findElement(By.xpath("/html/body/form/input[3]")).sendKeys(inputNumber2);
        Thread.sleep(1000);

        String pathGender = "";
        switch (inputGender) {

            case "Male":
                pathGender = "/html/body/form/input[4]";
                break;
            case "Female":
                pathGender = "/html/body/form/input[5]";
                break;
            case "Others":
                pathGender = "/html/body/form/input[6]";
                break;
        }
        driver.findElement(By.xpath(pathGender)).click();
        Thread.sleep(1000);

//For input fields of radiobutton and checkbox
        String pathFirstPart = "/html/body/form/input[";
        String pathLastPart = "]";
        int hobbyStart = 1;
        int numberOfHobbySelected = 2;
// Write a for loop to check all the boxes
        for (int i = hobbyStart; i <= numberOfHobbySelected; i++) {
            int specificXpath = 6 + i;
            String pathX = pathFirstPart + specificXpath + pathLastPart;
            driver.findElement(By.xpath(pathX)).click();
        }
        Thread.sleep(1000);

//Click the submit button
        driver.findElement(By.xpath("/html/body/form/input[10]")).submit();
// Get the content from the next page after clicking the submit button in the previous page
        Thread.sleep(1000);
        String content = driver.findElement(By.xpath("/html/body")).getText();
//Test case 1 - Comparing the result of the sum
// Get the value of the sum from html
        String actualValueString = content.substring(63, 65);
        Integer actualOutput = Integer.valueOf(actualValueString);
        
//calculate value of sum from values entered
        Integer tAct1 = Integer.valueOf(inputNumber1);
        Integer tAct2 = Integer.valueOf(inputNumber2);
        int expectedOutput = tAct1 + tAct2;

// Compare the actual and expected outputs
        if (actualOutput == expectedOutput) {
            System.out.println("Sum of numbers is correct. Your test case is successful");
        } else {
            System.out.println("Sum of numbers is not correct. Your test case failed");
        }
//Test case 2 – Verifying the name displayed
        String outputName = content.substring(6, 9);
        if (inputNameField.equals(outputName)) {
            System.out.println("Name printed is correct. Your test case is successful");
        } else {
            System.out.println("Test case failed for the Name");
        }
//Test case 3 – Verifying the checkboxes are checked as expected
        String hobbiesFromNextPage = content.substring(content.length() - 1);

        int intHobbiesFromNextPage = Integer.parseInt(hobbiesFromNextPage);
        if (numberOfHobbySelected == intHobbiesFromNextPage) {
            System.out.println("Test case passed for hobbies count");
        } else {
            System.out.println("Test case failed for the hobbies count");
        }

    }
// Save the project and run

}

