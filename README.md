# PHP skeleton (PHP 8.1 + symfony 6 + xdebug 3.1.4)
### Requirements
- [Docker](https://www.docker.com/)

### Start working
Install and run the application.
```sh
docker/up
```
## Running tests
With this command you will execute all the test (Functional, Integration, Unit and e2e). You don't need to execute something more.
```sh
docker/test
```
![Alt Text](https://64.media.tumblr.com/723987e60ebfffeb744f84fa92e52245/tumblr_neglojBBbo1sx56xso1_400.gif)
<br>
"We are amidst strange beings, in a strange land."
<br><br>
Solaire De Astora

# Graduated Tiered pricing exercise

## User story

Companies want to get subscriptions for their
employees.

We need to calculate the total price of the subscription
given the number of subscription that a company
wants to purchase.

Each subscription has a different unit price, depending
on the tier it belongs to:

| Range | Unit price |
|------:|-----------:|
|   1-2 |      299 € |
|  3-10 |      239 € |
| 11-25 |      219 € |
| 26-50 |      199 € |
|   51+ |      149 € |

For example, if the company wants 3 subscription,
the price of each subscription would be:

| subscription # | Price |
|---------------:|------:|
|              1 | 299 € |
|              2 | 299 € |
|              3 | 239 € |
|      **Total** | 837 € |

Here are some examples that can guide you during the
development process:

| Subscriptions | Unit price | Total   |
|--------------:|-----------:|--------:|
| 1             |      299 € |   299 € |
| 2             |      299 € |   598 € |
| 3             |      239 € |   837 € |
| 4             |      239 € |  1076 € |
| 5             |      239 € |  1315 € |
| 11            |      219 € |  2729 € |
| 12            |      219 € |  2948 € |
| 13            |      219 € |  3167 € |
| 26            |      199 € |  5994 € |
| 27            |      199 € |  6193 € |
| 28            |      199 € |  6392 € |
| 50            |      149 € | 10770 € |
| 51            |      149 € | 10919 € |
| 52            |      149 € | 11068 € |
