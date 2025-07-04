<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing</title>
</head>
<body>
    @include('header')
    <div class="pricingContainer">
        <div id="pricingHeading">
            <h1>Inkspire Pricing Plans</h1>
        </div>
        <div class="pricingContent">
            <div class="planContainer" id="freePlanContainer">
                <div class="priceHeading">
                    <h2>Free</h2>
                </div>
                <div class="planPrice">
                    <h3>$0</h3>
                    <div class="priceUnit">
                        <p>USD/</p>
                        <p>month</p>
                    </div>
                </div>
                <p>Explore your creativity and build momentum with the free plan</p>
                <div class="priceCTAButtonWrapper">
                    <button class="priceCTAButton" id="freePlanButton">Your Current Plan</button>
                </div>
                <ul class="tick-list">
                    <li>Generate up to 10 posts/month</li>
                    <li>Access to all core niches</li>
                    <li>Basic tone customization</li>
                    <li>Limited content history</li>
                    <li>Community support</li>
                    <li>No sign-up required</li>
                </ul>
                <p id="endCTA">Have an existing plan? See <a href="#" class="links">billing help</a></p>
            </div>
            <div class="planContainer" id="plusPlanContainer">
                <div class="priceHeading">
                    <h2>Plus</h2>
                    <div id="popular">
                        <p>POPULAR</p>
                    </div>
                </div>
                <div class="planPrice">
                    <h3>$15</h3>
                    <div class="priceUnit">
                        <p>USD/</p>
                        <p>month</p>
                    </div>
                </div>
                <p>Unlock premium tools and scale your content output</p>
                <div class="priceCTAButtonWrapper">
                    <button class="priceCTAButton"><a href="#">Get Plus</a></button>
                </div>
                <ul class="tick-list">
                    <li>Generate unlimited posts</li>
                    <li>Full access to all niche categories</li>
                    <li>Advanced tone & voice control</li>
                    <li>Save & organize content</li>
                    <li>Priority support</li>
                    <li>Early access to new features</li>
                </ul>
                <p id="endCTA" style="bottom: 25px"><a href="#" class="links">7-day free trial available</a></p>
            </div>
            <div class="planContainer" id="proPlanContainer">
                <div class="priceHeading">
                    <h2>Pro</h2>
                </div>
                <div class="planPrice">
                    <h3>$75</h3>
                    <div class="priceUnit">
                        <p>USD/</p>
                        <p>month</p>
                    </div>
                </div>
                <p>Dominate your niche with full-scale creative power</p>
                <div class="priceCTAButtonWrapper">
                    <button class="priceCTAButton"><a href="#">Get Pro</a></button>
                </div>
                <ul class="tick-list">
                    <li>Everything in Plus</li>
                    <li>Add up to 5 team members</li>
                    <li>Collaborative content boards</li>
                    <li>Export content to CSV/PDF</li>
                    <li>Role-based access</li>
                    <li>Dedicated onboarding support</li>
                </ul>
                <p id="endCTA">Custom onboarding on request. <a href="#" class="links">Learn more</a></p>
            </div>
        </div>
    </div>
</body>
</html>