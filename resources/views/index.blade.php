    <!-- header include open -->
    @extends('layout.main')
    @section('main-content')
    <!-- header inlcude end -->


    <!-- slider start -->
    <div class="container position-relative h-100">
      <div class="row">
        <div class="col-md-6">
          <div class="left-box">
            <h2 class="hero-title text-center">
              Say <span class="text-red font-weight-bold" style="color: rgb(255,0,0);">‘NO’</span> to<br>
              <span class="text-red font-weight-bold" style="color: rgb(255,0,0);">MONTHLY EXPENSES</span><br>
              For Sending Push Notifications
            </h2>
            <div class="text-center mt-4 px-4" style="color: var(--text-extra-light); max-width: 620px">LaraPush is a self-hosted push notification panel that comes with a one-time cost and lets you add unlimited domains, collect unlimited subscribers and send unlimited campaigns for unlimited period of time.</div>
            <div class="mt-4 mb-5 hero-button text-center">
              <button class="btn btn-primary mt-2 rounded-pill " data-testId="landing_book_demo" data-toggle="modal" data-target="#demoModal" style="font-weight: 700;">View Demo Right Away!</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-center" style="height: 550px">
          <div style="width: 350px">
            <div class="hero-images position-relative">
              <img src="https://larapush.com/assets/iphone.webp" class="position-absolute iphone" alt="Hero Image">

              <div class="position-absolute truesignal">
                <div class="notification">
                  <div class="icon-cover">
                    <img src="https://larapush.com/assets/truesignal.svg" class="icon" alt="alt-logo-truesignal">
                  </div>
                  <div class="app-name-cover">
                    <div class="app-name">TRUESIGNAL</div>
                  </div>
                  <div class="last-seen-cover">
                    <div class="last-seen">30 min ago</div>
                  </div>
                  <div class="title-cover">
                    <div class="title">Push Notification Monthly Bill !!</div>
                  </div>
                  <div class="description-cover">
                    <div class="description">
                      Hey Dave, Your monthly TrueSignal payment is pending!
                    </div>
                  </div>
                </div>
              </div>

              <div class="position-absolute larapush-notification">
                <div class="notification">
                  <div class="icon-cover">
                    <img src="https://larapush.com/assets//images/logo/SVG/Lara Push Final for svg-06.svg" class="icon" alt="icon">
                  </div>
                  <div class="app-name-cover">
                    <div class="app-name">LARAPUSH</div>
                  </div>
                  <div class="last-seen-cover">
                    <div class="last-seen">10 min ago</div>
                  </div>
                  <div class="title-cover">
                    <div class="title">LaraPush Purchase Successful 🎉</div>
                  </div>
                  <div class="description-cover">
                    <div class="description">
                      Congratulations!! You no-longer have to pay monthly bill.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-element">
          <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px">
        </div>
      </div>
    </div>
    <!-- slider end -->
    <br /><br />
    <!-- why start -->
    <div class="container mt-5 does-really">
      <div class="row">
        <div class="col-12 text-center">
          <h2 style="color:rgb(8,16,77);font-weight: 700;">
            What, Why & How?
          </h2>
          <div class="saperator"></div>
          <div class="mt-4 px-3 why-desc phone" style="color: var(--text-extra-light); margin: auto; max-width: 100%;">
            We are a team of bloggers who were frustrated by the huge recurring fees charged by SaaS brands.<br>
            We were getting charged hundreds and sometimes thousands of dollars every month.<br>
            So, we came up with a solution to solve this problem by creating a self hosted push notification panel, Larapush.
          </div>

          <div class="row mt-5 my-md-5" id="big-video">
            <div class="col-12 position-relative">
              <div class="box-video" style="background: #d8e9fe; max-width: 100%; width: 800px; border: 15px solid #d8e9fe; border-radius: 15px; z-index: 998;">
                <div class="bg-video" style="background-image: url(https://larapush.com/assets/images/video-image.webp);">
                  <div class="bt-play"></div>
                </div>
                <div class="video-container" id="video-container">

                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5 my-md-5" id="key-things">
            <div class="col-md-6" style="display: flex;align-content: center;align-items: center;flex-direction: row-reverse;">
              <img src="https://larapush.com/assets/key-things.png" style="max-width: 100%;" height="221px" width="380px" alt="Key things you should know">
            </div>
            <div class="col-md-6  pl-3 pl-md-5" style="font-size: 20px;">
              <div class="my-5 my-md-4 font-weight-bold">
                <div class="my-3 d-flex justify-content-sm-between">🌐 Register Unlimited domains</div>
                <div class="my-3 d-flex justify-content-sm-between">👥 Collect Unlimited Subscriptions</div>
                <div class="my-3 d-flex justify-content-sm-between">🍿 Send Unlimited Notifications</div>
                <div class="my-3 d-flex justify-content-sm-between">♾️ For as long as you want</div>
                <div class="my-3 d-flex justify-content-sm-between">💵 By just paying a One-time Fee</div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#demoModal" style="font-weight: 700;">View Demo Right Away!</button>
        </div>
      </div>
    </div>
    <!-- why end -->

    <br />
    <!-- brand open -->
    <div class="mt-5 mt-md-10 bill-parent">
      <div class="py-5 section-3">
        <div class="container text-center position-relative">
          <h2 style="font-weight: 900;color:rgb(38,45,99)">
            🥇 Brands Who <span class="text-primary">Trust</span> US
          </h2>
          <div class="saperator"></div>
          <p class="mt-4 mr-xl-5 phone">
            We have lots of satisfied customers who use LaraPush regularly to send notifications to their subscribers. <br>Some even have more than 400 million subscribers. <br><b>You can trust us 🤝</b>
          </p>
          <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
              <div class="image-row">
                <img src="{{asset('images/1.webp')}}" alt="customer-1" class="customer">
                <img src="{{asset('images/2.webp')}}" alt="customer-2" class="customer">
                <img src="{{asset('images/9.webp')}}" alt="customer-9" class="customer">
                <img src="{{asset('images/7.webp')}}" alt="customer-7" class="customer">
                <img src="{{asset('images/4.webp')}}" alt="customer-4" class="customer">
                <img src="{{asset('images/5.webp')}}" alt="customer-5" class="customer">
                <img src="{{asset('images/3.webp')}}" alt="customer-3" class="customer">
                <img src="{{asset('images/6.webp')}}" alt="customer-6" class="customer">
                <img src="{{asset('images/8.webp')}}" alt="customer-8" class="customer">
              </div>
            </div>
          </div>
          <!-- <div class="top-element">
          <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px" class="element">
        </div>
        <div class="bottom-element">
          <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px" class="element">
        </div> -->
        </div>
      </div>
    </div>
    <!-- brand end -->


    <!-- features start -->

    <div class="container mt-8 mt-md-10 features">
      <div class="row">
        <div class="col-12 text-center col-md-10 offset-md-1">
          <h2>
            We Got All Of The <span class="text-primary">Features</span> In The Industry!
          </h2>
          <div class="saperator"></div>
          <p class="mt-4 mr-xl-5 phone">
            When we developed LaraPush, we collected all the features available in the industry and added them in. We
            wanted to make sure that <span class="font-weight-bold">You Never Have To Think Even Once</span> About Any
            Limitations before purchasing the product.
          </p>
          <div class="mt-5 px-3 desktop" style="color: #000; margin: auto; max-width: 100%; text-align: left">
            🌀 When we developed LaraPush, we collected all the features available in the industry and added them in.<br><br>
            🌀 We wanted to make sure that you never have to think about features even once about any limitations before purchasing the product.
          </div>
        </div>
      </div>
      <div class="row position-relative mt-0 features-list">
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/wordpress-plugin.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">WordPress Plugin</h2>
            <p class="mt-3">
              Send push notifications to your subscribers with just one click or send push notification as soon as you publish.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/wordpress-plugin.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">WordPress Plugin</h2>
            <p class="mt-3 text-justify">
              🚀 Our WordPress plugin makes it easy to send push notifications to your subscribers. Simply install the plugin, enter your credentials, and you're ready to go! You can send push notifications to your subscribers with just one click, or you can set it up to automatically send push notifications to your subscribers whenever you publish a new post.💻<br><br>
              🔝 With our WordPress plugin, you can easily send push notifications to your subscribers without having to leave your WordPress dashboard. No more switching between multiple tabs or windows. Simply install the plugin, enter your credentials, and you're ready to go!👌
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card" style="height: 320px;">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/fastest-push-delivery.svg" style="width: 85px;" alt="featured_image">
            </div>
            <h2 class="mt-4">Fastest Push Delivery</h2>
            <p class="mt-3">
              Our notification delivery significantly surpasses that of available SAAS solutions.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/fastest-push-delivery.svg" style="width: 85px;" alt="featured_image">
            </div>
            <h2 class="mt-4">Fastest Push Delivery</h2>
            <p class="mt-3 text-justify">
              🐎 Are you tired of slow push notification services? Look no further than Larapush! Our self-hosted panel, based on Google's FCM, offers unparalleled sending speed! No other push notification service comes close to our lightning-fast sending speed.⚡️<br><br>
              ❌ Don't settle for less when it comes to your push notification service. Choose Larapush and experience the fastest and most reliable service available. Sign up now and see the difference for yourself!👀🚀
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/advanced-analytics.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Advanced Analytics</h2>
            <p class="mt-3">
              Comprehensive view of your audience on multiple parameters including URL, Location and much more..
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/advanced-analytics.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Advanced Analytics</h2>
            <p class="mt-3 text-justify">
              📊 With Larapush's Analytics, you'll gain unparalleled insights into your subscribers' behavior. Our platform collects data on 6 different parameters including DateTime ⏰, URL 🔗, Location 🌎, Device 📱, OS 💻, Browser 🌐, and much more, giving you a comprehensive view of your audience's engagement.👁️<br><br>
              ❌ Stop guessing and start optimizing your push notifications with Larapush's powerful Analytics feature. Try it out today and take your marketing efforts to the next level!💥🚀
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/segmentation.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Segmentation</h2>
            <p class="mt-3">
              Segment your audience and send notification on multiple parameters including the page they subscribed to.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/segmentation.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Segmentation</h2>
            <p class="mt-3 text-justify">
              🎯 Our segmentation feature allows you to send push notifications to specific groups of subscribers. You can segment your subscribers based on 6 different parameters, including URL, Location, Device, OS, and much more!🔍<br><br>
              🤝 This feature is the perfect solution for users who want to send push notifications to specific groups of subscribers. It's easy to use and most demanded feature by our users.👨‍💼
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/customizable-prompt.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Customizable Prompt</h2>
            <p class="mt-3">
              Customize your prompt with your own logo, heading, subheading, and button texts. Even to hide deny button.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/customizable-prompt.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Customizable Prompt</h2>
            <p class="mt-3 text-justify">
              You can now customize your prompt with your very own logo 🖼️, heading 📝, subheading 🗒️, and button texts 📄.<br><br>
              And wait, it gets even better - you can even remove the deny button ❌, because who needs the option to say no, right? 🙅‍♀️
              We're all about forcing users to subscribe before they can even access the content they came for.🔐<br><br>
              But hey, we're not gonna judge you if you don't want to use this amazing feature.🤷‍♂️
              It's totally optional, but we know deep down that you really want to have a feature that no one else provides.💡
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/amp-compatible.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">AMP Compatible</h2>
            <p class="mt-3">
              We officially supports Google’s AMP. Rank your blog posts on Google Discover and gain subscribers crazy fast.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/amp-compatible.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">AMP Compatible</h2>
            <p class="mt-3 text-justify">
              LaraPush officially supports Google’s AMP (Accelerated Mobile Pages) and is fully compatible with it. 🔥 Rank your blog posts on Google Discover and gain subscribers! 🚀
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/campaign-report.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Campaign Report</h2>
            <p class="mt-3">
              Gain in-depth insights into the performance of your notification campaigns and optimize them for superior results.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/campaign-report.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Campaign Report</h2>
            <p class="mt-3 text-justify">
              The "Campaign Report" feature in Larapush is a powerful tool that provides detailed insights into the performance of your push notification campaigns. 📈<br><br>
              📃 With this feature, you can track several metrics, including the total number of push notifications sent, clicks received, deliveries, and more.📊<br><br>
              The feature also allows you to track the success of specific call-to-action buttons included in your push notifications. This information can help you determine which buttons are most effective at driving clicks and engagement, allowing you to optimize your campaigns for better results.🚀
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/api-for-developers.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">API for Developers</h2>
            <p class="mt-3">
              We have a REST API for developers. You can get creative and build your own custom integration or automation.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/api-for-developers.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">API for Developers</h2>
            <p class="mt-3 text-justify">
              👨‍💻 We have a REST API for developers. You can get creative and build your own custom integrations with our API. You can also use our API to integrate your website with our push notification service.🤝<br><br>
              🤖 You can automate your push notifications using our API. You can send push notifications to your subscribers whenever you want. You can also send push notifications to specific groups of subscribers.🔍<br><br>
              🆓 And its totaly free unlimited API calls.🤩
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/security.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Security</h2>
            <p class="mt-3">
              In self-hosted push notification panel, unlike SAAS, tokens remain on your server. Nobody can use them unless you allow.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/security.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Security</h2>
            <p class="mt-3 text-justify">
              Unlike SAAS, in a self hosted push notification panel, your tokens stay on your server. That means nobody can use them unless you say so.🔐<br><br>
              Many SAAS providers use your tokens to send ads, inappropriate content, and even malicious notifications to users. This is a huge security risk.🚨<br><br>
              LaraPush is different. We don't have access to your tokens, so we can't send any notifications without your permission.👍
            </p>
          </div>
        </div>
        <svg width="956" height="627" viewBox="0 0 956 627" fill="none" xmlns="http://www.w3.org/2000/svg" class="features-left-svg">
          <path d="M25.4662 143.471C87.5686 72.1494 210.208 164.417 387.908 124.037C541.816 89.045 550.67 -3.89851 673.64 0.710431C763.48 4.05985 861.377 55.9342 915.179 146.308C974.513 245.952 952.944 347.397 946.889 372.014C919.86 482.429 839.637 540.674 811.336 560.567C694.733 642.477 563.888 628.123 501.117 621.269C265.324 595.444 12.8863 427.102 1.64628 244.08C0.152467 220.119 -2.56631 175.678 25.4662 143.471Z" fill="url(#features-left-svg)" />
          <defs>
            <linearGradient id="features-left-svg" x1="617.161" y1="-146.359" x2="380.15" y2="567.8" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F3F7FF" />
              <stop offset="1" stop-color="#0067F5" stop-opacity="0.39" />
            </linearGradient>
          </defs>
        </svg>
        <svg width="956" height="627" viewBox="0 0 956 627" fill="none" xmlns="http://www.w3.org/2000/svg" class="features-right-svg">
          <path d="M25.4662 143.471C87.5686 72.1494 210.208 164.417 387.908 124.037C541.816 89.045 550.67 -3.89851 673.64 0.710431C763.48 4.05985 861.377 55.9342 915.179 146.308C974.513 245.952 952.944 347.397 946.889 372.014C919.86 482.429 839.637 540.674 811.336 560.567C694.733 642.477 563.888 628.123 501.117 621.269C265.324 595.444 12.8863 427.102 1.64628 244.08C0.152467 220.119 -2.56631 175.678 25.4662 143.471Z" fill="url(#features-left-svg)" />
          <defs>
            <linearGradient id="features-left-svg" x1="617.161" y1="-146.359" x2="380.15" y2="567.8" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F3F7FF" />
              <stop offset="1" stop-color="#0067F5" stop-opacity="0.39" />
            </linearGradient>
          </defs>
        </svg>
        <div class="features-element-left">
          <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px" class="element">
        </div>
        <div class="features-element-right">
          <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px" class="element">
        </div>

        <div class="modal fade normalModal" id="featuresModel" tabindex="-1" role="dialog" aria-labelledby="demoModalTitle" aria-hidden="true">
          <div class="modal-dialog m-3 m-md-auto modal-dialog-centered justify-content-center">
            <div class="bg m-auto text-center d-flex flex-column outerBox position-relative overflow-hidden">
              <div id="description">

              </div>
              <div class="modelElement">
                <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px">
              </div>
              <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- features end -->


    <!-- automation start -->


    <div class="container mt-5 features">
      <div class="row">
        <div class="col-12 text-center col-md-10 offset-md-1">
          <h2>
            Also We bring <span class="text-primary">Automation</span> to the Next Level
          </h2>
        </div>
      </div>
      <div class="row position-relative mt-0 features-list">
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/automagic-push.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">AutoMagic Push</h2>
            <p class="mt-3">
              Select a random post from your recent X posts and schedule push notifications at your desired frequency.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/automagic-push.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">AutoMagic Push</h2>
            <p class="mt-3 text-justify">
              🎉 Introducing our exclusive feature - AutoMagic Push! Say goodbye to the hassle of manually sending push notifications to your subscribers.<br><br>
              🪄 With AutoMagic Push, you can easily select a random post from your recent X posts (where X can be defined by you) and schedule push notifications to be sent out at your desired frequency (every hour, every day - whatever suits your needs best!).🤩<br><br>
              🔥 This cutting-edge feature is not available in any other push notification service. You can now sit back, relax, and let AutoMagic Push take care of all your push notification needs. Simply set it up and forget about it! 🙌
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/drip-notification.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Drip Notification</h2>
            <p class="mt-3">
              Effortlessly nurture your subscribers with personalized and timely messages through our powerful drip campaigns
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/drip-notification.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Drip Notification</h2>
            <p class="mt-3 text-justify">
              📧 Drip campaigns are an automated marketing strategy that involves sending a series of targeted messages to a specific audience at predetermined intervals. <br><br>
              🪄 By delivering personalized and relevant content to subscribers over time, drip campaigns can nurture leads, build trust, and ultimately drive conversions and sales.<br><br>
              💼 They provide a way for businesses to engage with their audience in a personalized and automated way, delivering valuable content and messaging over time. By segmenting their audience and delivering targeted messages at just the right time, businesses can build strong relationships with their subscribers and drive more conversions and sales 🚀
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 p-3 card-parent" onclick="showFeature(this)">
          <div class="feature-card">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/push-on-publish.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Push On Publish</h2>
            <p class="mt-3">
              Send Push Notifications to your subscribers when you publish a new post. Rank your posts higher in Search.
            </p>
            <div class="text-primary view-more-button">
              <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.596 13.058a1.495 1.495 0 0 0 0-2.116A39833.83 39833.83 0 0 0 15.963 5.3c-.39-.39-1.03-.39-1.42 0a.996.996 0 0 0 0 1.41l2.716 2.717a9.994 9.994 0 0 0 1.768 1.406l.342.214-.208.207a10 10 0 0 0-2.24-.254H3a1 1 0 1 0 0 2h13.922a10 10 0 0 0 2.24-.254l.207.207-.342.214c-.641.4-1.233.872-1.768 1.406l-2.716 2.717a.996.996 0 0 0 0 1.41c.39.39 1.03.39 1.42 0l5.633-5.642z" fill="currentColor" />
              </svg>
            </div>
          </div>
          <div id="feature-description">
            <div class="icon mt-3">
              <img loading="lazy" src="https://larapush.com/assets/images/features/api-for-developers.svg" alt="featured_image">
            </div>
            <h2 class="mt-4">Push On Publish</h2>
            <p class="mt-3 text-justify">
              📧 Send Push Notifications to your subscribers when you publish a new post. Rank your posts higher in Search. 🪄<br><br>
              💼 No Need for any manual work. Just publish your post and we will send push notifications to your subscribers automatically. 🚀
            </p>
          </div>
        </div>
        <svg width="956" height="627" viewBox="0 0 956 627" fill="none" xmlns="http://www.w3.org/2000/svg" class="features-right-svg">
          <path d="M25.4662 143.471C87.5686 72.1494 210.208 164.417 387.908 124.037C541.816 89.045 550.67 -3.89851 673.64 0.710431C763.48 4.05985 861.377 55.9342 915.179 146.308C974.513 245.952 952.944 347.397 946.889 372.014C919.86 482.429 839.637 540.674 811.336 560.567C694.733 642.477 563.888 628.123 501.117 621.269C265.324 595.444 12.8863 427.102 1.64628 244.08C0.152467 220.119 -2.56631 175.678 25.4662 143.471Z" fill="url(#features-left-svg)" />
          <defs>
            <linearGradient id="features-left-svg" x1="617.161" y1="-146.359" x2="380.15" y2="567.8" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F3F7FF" />
              <stop offset="1" stop-color="#0067F5" stop-opacity="0.39" />
            </linearGradient>
          </defs>
        </svg>
        <div class="features-element-left">
          <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px" class="element">
        </div>
        <div class="features-element-right">
          <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="100px" width="100px" class="element">
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="https://larapush.com/contact">
          <button class="button-primary mt-4">
            Recommend a Feature
          </button>
        </a>
      </div>
    </div>
    <!-- automation end -->

    <!-- migrate start -->
    <div class="container mt-10 mt-md-8 migrate">
      <div class="row">
        <div class="col-12 text-center col-md-10 offset-md-1">
          <h2>
            And Don’t Worry, We’ll <span class="text-primary">Migrate</span> You.
          </h2>
          <div class="saperator"></div>
          <p class="mt-4 mr-xl-5 phone">
            If you are already using another push notification service, you won’t lose your existing subscribers. We will migrate all of your existing tokens from your current push notification service to your LaraPush Pro Panel without any hassle.
          </p>
          <div class="mt-5 px-3 mb-4 desktop" style="color: #000; margin: auto; max-width: 100%; text-align: left">
            🌀 If you are already using a push notification service, you won’t lose your existing subscribers. We will migrate all of your existing tokens from your current push notification service to your LaraPush Pro Panel without any hassle.
          </div>
        </div>
      </div>
    </div>
    <!-- migrate end -->

    <!-- slider start -->


    <!-- slider end -->

    <!-- faq start -->

    <div class="mt-8 mt-md-10">
      <div class="container">
        <div class="row position-relative">
          <div class="col-12 col-md-10 offset-md-1">
            <div style="position: absolute;right: 0px;top: -50px;z-index: -1;">
              <img loading="lazy" src="{{asset('images/top-element.svg')}}" alt="design-element" height="132px" width="132px" class="element">
            </div>
            <div class="accordion">
              <h2 class="accordion__heading">
                <span class="text-primary">FAQs</span>
              </h2>

              <div class="accordion__item">
                <button class="accordion__btn">

                  <span class="accordion__caption"><i class="far fa-lightbulb"></i>Do I need any coding knowledge to use this panel?</span>
                  <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                </button>

                <div class="accordion__content">
                  <p>No, you don't need any coding knowledge to use LaraPush panel. It is designed to be user-friendly and can be used by anyone without any technical knowledge.</p>
                </div>
              </div>

              <div class="accordion__item">
                <button class="accordion__btn">

                  <span class="accordion__caption"><i class="far fa-lightbulb"></i>How does LaraPush work?</span>
                  <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                </button>

                <div class="accordion__content">
                  <p>LaraPush is a self hosted push notification Panel, which means LaraPush panel will be hosted in your own server and you will use it independently. We use FCM (Firebase Cloud Messaging) to send push notifications to your subscribers. So, you just need a Google account to use LaraPush.</p>
                </div>
              </div>

              <div class="accordion__item">
                <button class="accordion__btn">

                  <span class="accordion__caption"><i class="far fa-lightbulb"></i>What will happen to my current subscribers?</span>
                  <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                </button>

                <div class="accordion__content">
                  <p>We will migrate your current subscribers to your LaraPush panel, so you don't need to worry about any subscriber loss.</p>
                </div>
              </div>

              <div class="accordion__item">
                <button class="accordion__btn">

                  <span class="accordion__caption"><i class="far fa-lightbulb"></i>Is LaraPush truly unlimited?</span>
                  <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                </button>

                <div class="accordion__content">
                  <p>Yes, LaraPush is truly unlimited self hosted push notification panel. We haven't put any capping on the size growth and we have tested our panel on more then 150 Million + tokens.</p>
                </div>
              </div>

              <div class="accordion__item">
                <button class="accordion__btn">

                  <span class="accordion__caption"><i class="far fa-lightbulb"></i>I have more questions, where can I ask?</span>
                  <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                </button>

                <div class="accordion__content">
                  <p>Please Fill this demo form and we will contact you asap, you can call us directly as well.</p>
                  <div class="px-3">
                    <button class="button-primary mt-2" data-toggle="modal" data-target="#demoModal">View Demo Right Away!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- faq start -->

    <!-- still start -->
    <div class="container mt-7 contact">
      <div class="row">
        <div class="col-12 col-lg-5 col-md-6 offset-lg-1 text-left d-flex justify-content-center flex-column">
          <h2 class="text-md-left">
            Still Not <span class="text-primary">Convinced</span>?
          </h2>
          <div class="saperator ml-md-0"></div>
          <p class="mt-4 text-md-left">
            Our panel provided consistent results for many people, and there's no single reason not to use Larapush.
            <br><br>If you've any questions, please don't hesitate to <a href="/contact/" class="font-weight-bold">contact us.</a>
          </p>
        </div>
        <div class="col-12 col-lg-5 col-md-6 text-left">
          <button class="youtube-overlay" data-toggle="modal" data-target="#letterModel">
            <img loading="lazy" src="{{asset('images/call.png')}}" width="500px" alt="call_icon" height="400px" />
          </button>
        </div>
      </div>
      <div class="row mt-7">
        <div class="col-md-4 d-flex justify-content-center flex-column align-items-center">
          <a href="/pricing/">
            <button class="button-secondary mt-4 big-buttons">Pricing</button>
          </a>
        </div>
        <div class="col-md-4 d-flex justify-content-center flex-column align-items-center">
          <div class="col-md-4 d-flex justify-content-center flex-column align-items-center">
            <button class="button-primary mt-4 big-buttons" data-toggle="modal" data-target="#demoModal">Demo</button>
          </div>
          </a>
        </div>
        <div class="col-md-4 d-flex justify-content-center flex-column align-items-center">
          <a href="/contact/">
            <button class="button-secondary mt-4 big-buttons">Contact Sales</button>
          </a>
        </div>
      </div>
    </div>
    <!-- still end -->

    <!-- review start -->
    <div class="mt-8 mt-md-10 container">
      <div class="row">
        <div id="tp-widget-wrapper" class="tp-widget-wrapper visible">
          <div id="wrapper-left" class="wrapper-left">
            <!-- Human Score -->
            <div class="tp-widget-humanscore"><span id="trust-score">Excellent</span></div>
            <!-- Stars -->
            <div class="tp-widget-stars"><span id="tp-widget-stars">
                <div class="">
                  <div class="tp-stars tp-stars--4--half">
                    <div style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                      <svg role="img" aria-label="starRating" viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                        <title lang="en">4.4 out of five star rating on Trustpilot</title>
                        <g class="tp-star">
                          <path class="tp-star__canvas" fill="#dcdce6" d="M0 46.330002h46.375586V0H0z"></path>
                          <path class="tp-star__shape" d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z" fill="#FFF"></path>
                        </g>
                        <g class="tp-star">
                          <path class="tp-star__canvas" fill="#dcdce6" d="M51.24816 46.330002h46.375587V0H51.248161z">
                          </path>
                          <path class="tp-star__canvas--half" fill="#dcdce6" d="M51.24816 46.330002h23.187793V0H51.248161z">
                          </path>
                          <path class="tp-star__shape" d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z" fill="#FFF"></path>
                        </g>
                        <g class="tp-star">
                          <path class="tp-star__canvas" fill="#dcdce6" d="M102.532209 46.330002h46.375586V0h-46.375586z">
                          </path>
                          <path class="tp-star__canvas--half" fill="#dcdce6" d="M102.532209 46.330002h23.187793V0h-23.187793z"></path>
                          <path class="tp-star__shape" d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z" fill="#FFF"></path>
                        </g>
                        <g class="tp-star">
                          <path class="tp-star__canvas" fill="#dcdce6" d="M153.815458 46.330002h46.375586V0h-46.375586z">
                          </path>
                          <path class="tp-star__canvas--half" fill="#dcdce6" d="M153.815458 46.330002h23.187793V0h-23.187793z"></path>
                          <path class="tp-star__shape" d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                        </g>
                        <g class="tp-star">
                          <path class="tp-star__canvas" fill="#dcdce6" d="M205.064416 46.330002h46.375587V0h-46.375587z">
                          </path>
                          <path class="tp-star__canvas--half" fill="#dcdce6" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                          <path class="tp-star__shape" d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                        </g>
                      </svg>
                    </div>
                  </div>
                </div>
              </span></div>
            <!-- Business Info -->
            <div class="tp-widget-businessinfo"><span id="translations-basedon">Based on <span><strong class="bold-underline">87 reviews</strong></span></span></div>
            <!-- Logo -->

          </div>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- footer include open -->
    @endsection
    <!-- footer include end -->