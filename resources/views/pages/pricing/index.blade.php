@extends('layouts.app')

<style>
    .demo-wrap {
  display: flex;
  align-items: center;
  flex-flow: column;
  justify-content: center;
  height: 100vh;
  width: 100%;
}

.demo-header {
  padding-right: 1em;
  padding-left: 1em;
  text-align: center;

}

@media (min-width: 62em) {
  .demo-wrap {
    padding-top: 0;
    height: 80vh
  }
}


/* --- Pricing Plans --- */

.pricing-plans {
  padding: 0em 0;
  width: 100%;
}

.pricing-tables {
  display: flex;
  flex-flow: column;
  padding-top: 1em;
}

.pricing-plan {
  background-color: #f6f6f6;
  border: 2px solid #DDD;
  border-bottom: 2px solid #DDD;
  display: block;
  padding: 1em 0;
  text-align: center;
  width: 100%;
}

.pricing-plan:first-child, .pricing-plan:last-child {
  background-color: #EEE;
}

.pricing-plan:first-child {
  border-bottom: 0;
}

.pricing-plan:last-child {
  border-top: 0;
}

.pricing-plan:nth-child(2) {
  border-bottom: 0;
}

.no-flexbox .pricing-plan {
  float: left;
}

.plan-title {
  font-size: 1em;
  letter-spacing: -0.05em;
  margin: 0;
  padding: 0.75em 1em 1.25em;
  text-transform: uppercase;
}

.plan-cost {
  background-color: white;
  color: #77b9dd;
  font-size: 1.25em;
  font-weight: 700;
  padding: 1.25em 1em;
  text-transform: uppercase;
}

.plan-cost span {
  display: none;
}

.plan-price {
  font-size: 3em;
  letter-spacing: -0.05em;
  line-height: 1;
  margin-bottom: 0;
}

.plan-type {
  border: 0.313em solid #DDD;
  color: #999;
  display: inline-block;
  font-size: 0.75em;
  margin: 0.75em 0 0 0.75em;
  padding: 0.3em 0.4em 0.25em;
  width: auto;
}

.plan-features {
  margin: 0;
  padding: 2em 1em 1em;
}

.plan-features li {
  list-style-type: none;
  border-bottom: 1px solid #DDD;
  margin-bottom: 0.5em;
  padding-bottom: 0.75em;
  color: #555;
  display: block;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: .8em;
  font-weight: normal;
  line-height: 1.3;
//   &:before {
//     content: "✔";
//     margin-right: 7px;

//   }
  span {
    color: #BBB;
  }
}

.plan-features li:last-child {
  border-bottom: none;
  margin-bottom: 0;
  padding-bottom: 0;
}

.plan-features h3 {

}

.plan-features i {
  font-size: 1.5em;
}

.plan-features i.icon-ok-squared {
  color: #3aa14d;
}

.plan-features i.icon-cancel-circled {
  color: darkRed;
}

.btn-plan {
  background-color: #1B8DC8;
  color: white;
  max-width: 12em;
}

.cta {
  background-color: #6cb507;
}

.featured-plan {
  background-color: #eef7fc;
  border-top: 5px solid #8cd0f5;
  border-right: 0 solid transparent;
  border-bottom: 5px solid #8cd0f5;
  border-left: 0 solid transparent;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
  overflow: hidden;
  //order: -1;
  position: relative;
  transition: transform 400ms ease;
}

.featured-plan {
  .plan-title {
    color: #1B8DC8;
  }
}

.featured-ribbon {
  width: 200px;
  background: #1B8DC8;
  position: absolute;
  top: 15px;
  left: -60px;
  text-align: center;
  line-height: 35px;
  letter-spacing: 0.01em;
  font-size: 0.65em;
  font-weight: 700;
  color: white;
  text-transform: uppercase;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  /* Custom styles */
  /* Different positions */
}

.featured-ribbon.sticky {
  position: fixed;
}

.featured-ribbon.shadow {
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}

.featured-ribbon.top-left {
  top: 25px;
  left: -50px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.featured-ribbon.top-right {
  top: 25px;
  right: -50px;
  left: auto;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

.featured-ribbon.bottom-left {
  top: auto;
  bottom: 25px;
  left: -50px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

.featured-ribbon.bottom-right {
  top: auto;
  right: -50px;
  bottom: 25px;
  left: auto;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

@media (min-width: 400px) {
  .pricing-plans {
    padding-right: 2em;
    padding-left: 2em;
    width: 100%;
  }

  .featured-plan {
    transform: scale(1.05);
  }
}

@media (min-width: 33.75em) {
  .pricing-plans .module-title {
    margin-bottom: 1em;
  }

  .pricing-tables {
    flex-flow: row wrap;
  }

  .pricing-plan {
    flex-grow: 1;
    width: 50%;
  }

  .pricing-plan:first-child {
    border-right: 0;
    border-bottom: 0;
  }

  .featured-plan {
    margin-top: 0.6em;
    order: 0;
  }

  .pricing-plan:nth-child(3) {

  }

  .pricing-plan:last-child {
    border-top: 2px solid #DDD;
    border-left: 0;
  }

  .no-flexbox .pricing-plan {
    width: 48%;
  }

  .plan-title {
    font-size: 0.875em;
  }
}

@media (min-width: 48em) {
  .no-flexbox .pricing-plan {
    width: 24%;
  }

  .plan-type {
    font-size: 0.7em;
    margin: 0.5em 0 0 1em;
    padding-bottom: 0.2em;
  }

  .featured-ribbon {
    font-size: 0.65em;
  }
}

@media (min-width: 62em) {
  .pricing-tables {
    padding-top: 3em;
  }

  .pricing-plan {
    flex-grow: 1;
    width: 25%;
  }

  .featured-plan {
    margin-top: 0;
    order: 0;
  }

  .pricing-plan:first-child, .pricing-plan:nth-child(2n) {
    border-bottom: 2px solid #DDD;
  }

  .pricing-plan .plan-features span {
    display: block !important;
  }

  .plan-cost {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    justify-content: center;
    font-size: 1em;
  }

  .plan-cost span {
    color: #BBB;
    font-size: 1.5em;
    font-weight: 400;
    padding-right: 0.15em;
    padding-left: 0.15em;
  }

  .plan-price {
    font-size: 3.25em;
  }

  .btn-plan {
    font-size: 0.875em;
  }

  .featured-ribbon {
    font-size: 0.45em;
    left: -68px;
    line-height: 25px;
  }
}

@media (min-width: 75em) {
  .plan-cost {
    font-size: 1em;
  }
}

@media (min-width: 100em) {
  .pricing-tables {
    margin: 0 auto;
    max-width: 75.00em;
  }
}
</style>
@section('contents')

<div class="demo-wrap">



    <!-- PRICING PLANS -->
    <section class="pricing-plans">
        <!-- Pricing Tables -->
        <div class="pricing-tables">
            <!-- Plan Features -->
            <div class="pricing-plan">
                <h2 class="plan-title">Starter pack</h2>
                <div class="plan-cost">
                    <p class="plan-price">₦ 1000</p>
                    <span>.00</span>
                </div>
                <ul class="plan-features">
                    <li>You get two advert post</li>
                    <li>Your advert remain on our page for 14 days</li>
                    <li><span>You enjoy one instagram story</span></li>
                    <li><span>Customers price request notification</span></li>
                    <li><span>High conversion rate</span></li>
                </ul>
                <a class="btn btn-lg btn-primary border-0" style="background: #1B8DC8 !important" href="https://payment.sellfast.ng/subscription-plan-monthly-payment">Select Plan</a>
            </div>
            <!-- "Basic" Plan -->
            <div class="pricing-plan">
                <h2 class="plan-title">Premium pack</h2>
                <div class="plan-cost">
                    <p class="plan-price">₦ 1500</p>
                    <span>.00</span>
                </div>
                <ul class="plan-features">
                    <li>You get two advert post for 30 days</li>
                    <li>Your advert remain on our page for 30 days</li>
                    <li><span>You enjoy one instagram story</span></li>
                    <li><span>Customers price request notification</span></li>
                    <li><span>High conversion rate</span></li>
                </ul>
                <a class="btn btn-lg btn-primary border-0" style="background: #1B8DC8 !important" href="https://payment.sellfast.ng/smart-plan-starter-pack">Select Plan</a>
            </div>
            <!-- "Premium" Plan -->
            <div class="pricing-plan featured-plan">
                <div class="featured-ribbon">Best Value</div>
                <h2 class="plan-title">VIP Pack</h2>
                <div class="plan-cost">
                    <p class="plan-price">2000</p>
                    <span>.00</span>
                </div>
                <ul class="plan-features">
                    <li>You get four advert post per month for 60 days</li>
                    <li>Your advert remain on our page for 60 days</li>
                    <li><span>You enjoy four instagram story for 60 days
                    </span></li>
                    <li><span>Customers price request notification</span></li>
                    <li><span>High conversion rate</span></li>
                </ul>
                <a class="btn btn-lg btn-primary border-0" style="background: #1B8DC8 !important" href="https://payment.sellfast.ng/subscription-plan-monthly-payment-bank">Select Plan</a>
            </div>
            <!-- "Ultmate" Plan -->
            <div class="pricing-plan">
                <h2 class="plan-title">Bsaic pack</h2>
                <div class="plan-cost">
                    <p class="plan-price">500</p>
                    <span>.00</span>
                </div>
                <ul class="plan-features">
                    <li>You get only one advert post</li>
                    <li>Your advert remain on page for 1 day</li>
                    <li><span class="text-danger icon-times"></span></li>
                    <li><span class="text-danger icon-times"></span></li>
                    <li><span class="text-danger icon-times"></span></li>
                </ul>
                <a class="btn btn-lg btn-primary border-0" style="background: #1B8DC8 !important" href="https://payment.sellfast.ng/basic-plan-monthly-payment">Select Plan</a>
            </div>
        </div>
    </section>
</div>
@endsection
