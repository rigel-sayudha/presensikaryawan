import { chromium } from 'playwright';

(async () => {
  const browser = await chromium.launch();
  const page = await browser.newPage();

  await page.setViewportSize({ width: 1280, height: 800 });

  // Go to the login page (or home page that redirects to login)
  await page.goto('http://127.0.0.1:8000/login');

  // Wait for the login form
  await page.waitForSelector('input[type="email"]');

  // Fill the login form
  await page.fill('input[type="email"]', 'admin@absensimagang.com');
  await page.fill('input[type="password"]', 'admin123');

  await page.click('button.btn-primary');

  // Wait for transition to complete
  await page.waitForTimeout(5000);

  // Take screenshot
  await page.screenshot({ path: 'public/capture.png', fullPage: true });

  await browser.close();
})();
