=== PAYPAL CURRENCY CONVERTER BASIC FOR WOOCOMMERCE ===
Contributors: henry-krupp
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=26WB9A5VGALEQ
Tags: woocommerce, paypal, currency conversion, exchange rate
Requires at least: 3.0.1
Tested up to: 4.6.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Convert any given WooCommerce shop currency to allowed PayPal currencies for PayPal's Payment Gateway within WooCommerce on checkout.

== Description ==
Convert any given WooCommerce shop currency to allowed PayPal currencies for PayPal's Payment Gateway within WooCommerce on checkout.
Actual Currency Exchange Rates will be retrieved from Yahoo.
Tool-tip help on every item.
Be aware that this is a basic version only and as such is not recommended for a real WooCommerce-shop since it only converts the products total.
It does not convert taxes and shipping cost.

== Installation ==
PayPal Currency Converter BASIC for WooCommerce installs like any WordPress plugin.


MANDATORY SETTINGS:
1. Find the settings page in WooCommerce's sub menu.
2. First time only: Select your target Currency
3. Save settings to invoke the exchange rate retrieval.
4. Accept the suggested exchange rate shown in the button.
5. Save settings again.
When the currently saved currency exchange rate is equal with the actual currency exchange rate the value is indicated by green font color.
A difference between the saved currency exchange rate and the actual is indicated by red colored value and through warning message.


Heinrich Krupp
intelligent-it.asia



== Frequently Asked Questions ==

= How can I have automated exchange rate updates? =

Find the PRO version of this plugin on codecanyon.net http://codecanyon.net/item/paypal-currency-converter-pro-for-woocommerce/6343249

= How can I have 5 digits accuracy? =

Find the PRO version of this plugin on codecanyon.net http://codecanyon.net/item/paypal-currency-converter-pro-for-woocommerce/6343249

= How can the TAX be converted? =

Tax conversion is supported in the PRO version of this plugin on codecanyon.net http://codecanyon.net/item/paypal-currency-converter-pro-for-woocommerce/6343249

= How can I show the conversion rate on the checkout page? =
You can set the PayPal Description in such a way to show the conversion rate in the payment description.
Simply add "{}" into the description at your desired place and it will be replaced by the current conversion rate and currency pairing.
Example Description:
<img id="logo" alt="Intelligent IT" src="http://intelligent-it.asia/iit/wp-content/uploads/2013/07/favicon.ico">Thank you for choosing Intelligent IT  for your IT needs</img>.
Pay via PayPal; you can pay with your credit card if you don&#039;t have a PayPal account.
<strong>The order total will be converted from KRW into USD with the current exchange rate of {0.0971USD/ZAR}</strong>

== Screenshots ==

1. Menu location
2. Settings Admin Backend
3. Conversion rate in PayPal description on checkout
4. PayPal pay page

== Changelog ==

= 1.0 =
* Initial version
= 1.1 =
* New Dash-Icons as of WordPress 3.8
* Show the current conversion rate in PayPal's payment gateway description.
You can set the PayPal Description in such a way to show the conversion rate in the payment description.
**Simply add "{}" into the description at your desired place and it will be replaced by the current conversion rate and currency pairing.**

Example Description:

Thank you for choosing *XYZ* for your *xyz* needs.
Pay via PayPal; you can pay with your credit card if you don&#039;t have a PayPal account.
The order total will be converted from KRW into USD with the current exchange rate of **{0.0971USD/ZAR}**

= 1.2 =
* Code clean up
* Some Layout change
* Additional information

= 1.3 =
* trial version
* Tested with WooCommerce 2.3.2 

= 1.4 =
* Vulnerability, due to google currency lookup removed

= 1.5 =
* updated according to WordPress compliance

= 1.6 =
* allow non supported currencies


= 1.7 =
* minor bug fix

== Upgrade Notice ==

= 1.0 =
* Allow your customers to pay any shop currency with PayPal

= 1.1 =
* Backend layout adjusted to new Dash-Icons as of WordPress 3.8
* Show the current conversion rate in PayPal's payment gateway description.

= 1.2 =
* Code clean up
* Some Layout change
* Additional information


= 1.3 =
* trial version
* Tested with WooCommerce 2.3.2 

= 1.4 =
* Vulnerability, due to google currency lookup removed

= 1.5 =
* updated according to WordPress compliance



= 1.6 =
* allow non supported currencies




= 1.7 =
* minor bug fix