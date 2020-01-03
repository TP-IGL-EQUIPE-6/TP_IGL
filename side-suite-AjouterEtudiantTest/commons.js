const utils = require("./utils.js");
const tests = {};
tests["AjouterEtudiantSeleniumTest"] = async (driver, vars, opts = {}) => {
  await driver.get((new URL(`/TP_IGL/public/students/CreerEtudiantForm`, BASE_URL)).href);
  try {
    await driver.manage().window().setRect({
      width: 1600,
      height: 860
    });
  } catch (error) {
    console.log('Unable to resize window. Skipping.');
  };
  await driver.wait(until.elementLocated(By.id(`nom`)), configuration.timeout);
  await driver.findElement(By.id(`nom`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`nom`)), configuration.timeout);
  await driver.findElement(By.id(`nom`)).then(element => {
    return element.clear().then(() => {
      return element.sendKeys(`bennamane`);
    });
  });
  await driver.wait(until.elementLocated(By.id(`prenom`)), configuration.timeout);
  await driver.findElement(By.id(`prenom`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`prenom`)), configuration.timeout);
  await driver.findElement(By.id(`prenom`)).then(element => {
    return element.clear().then(() => {
      return element.sendKeys(`khadidja2`);
    });
  });
  await driver.wait(until.elementLocated(By.id(`matricule`)), configuration.timeout);
  await driver.findElement(By.id(`matricule`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`matricule`)), configuration.timeout);
  await driver.findElement(By.id(`matricule`)).then(element => {
    return element.clear().then(() => {
      return element.sendKeys(`170027`);
    });
  });
  await driver.wait(until.elementLocated(By.id(`niveau`)), configuration.timeout);
  await driver.findElement(By.id(`niveau`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`niveau`)), configuration.timeout);
  await driver.findElement(By.id(`niveau`)).then(element => {
    return element.findElement(By.xpath(`//option[. = '1CS']`)).then(option => {
      return option.click();
    });
  });
  await driver.wait(until.elementLocated(By.id(`niveau`)), configuration.timeout);
  await driver.findElement(By.id(`niveau`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`section`)), configuration.timeout);
  await driver.findElement(By.id(`section`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`section`)), configuration.timeout);
  await driver.findElement(By.id(`section`)).then(element => {
    return element.findElement(By.xpath(`//option[. = 'B']`)).then(option => {
      return option.click();
    });
  });
  await driver.wait(until.elementLocated(By.id(`section`)), configuration.timeout);
  await driver.findElement(By.id(`section`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`grp`)), configuration.timeout);
  await driver.findElement(By.id(`grp`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.id(`grp`)), configuration.timeout);
  await driver.findElement(By.id(`grp`)).then(element => {
    return element.findElement(By.xpath(`//option[. = '9']`)).then(option => {
      return option.click();
    });
  });
  await driver.wait(until.elementLocated(By.id(`grp`)), configuration.timeout);
  await driver.findElement(By.id(`grp`)).then(element => {
    return element.click();
  });
  await driver.wait(until.elementLocated(By.css(`.buttonZone`)), configuration.timeout);
  await driver.findElement(By.css(`.buttonZone`)).then(element => {
    return element.click();
  });
}
module.exports = tests;