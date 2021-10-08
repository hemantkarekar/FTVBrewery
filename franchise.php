<!DOCTYPE html>
<html>

<head>
  <?php include "includes/_head.php"; ?>
  <title>Franchise | FTV Brewery</title>
</head>

<body>
  <?php include "includes/_header.php"; ?>
  <main class="franchise">
    <section class="intro">
      <div class="wrap">
        <video autoplay loop muted preload="auto" class="lg">
          <source src="/assets/media//videos/Brewery-Franchise.mp4" type="">
        </video>
        <video autoplay loop muted preload="auto" class="md">
          <source src="/assets/media//videos/Brewery-Franchise1.mp4" type="">
        </video>
      </div>
    </section>
    <section class="modules">
      <div class="title">
        <h1>Modules</h1>
      </div>
      <div class=" desc table">
        <table>
          <tr>
            <th>Module</th>
            <th>Luxury</th>
            <th>Regular</th>
          </tr>
          <tr>
            <td>Franchising Fees</td>
            <td>₹ 30 Lacs</td>
            <td>₹ 20 Lacs</td>
          </tr>
          <tr>
            <td>Area Upto</td>
            <td>4000 sq.ft.</td>
            <td>2500sq.ft.</td>
          </tr>
          <tr>
            <td>Investment</td>
            <td>₹ 2.5 Cr.</td>
            <td>₹ 1.5 Cr.</td>
          </tr>
          <tr>
            <td>Royalty</td>
            <td>10%</td>
            <td>10%</td>
          </tr>
          <tr>
            <td>Avg. ROI in 3 years</td>
            <td>77%</td>
            <td>75%</td>
          </tr>
        </table>
      </div>
    </section>
    <section class="pre-req">
      <div class="image-content">
        <div class="wrap">
          <img src="/assets/media/images/image -3.png" alt="">
          <div class="gradient"></div>
        </div>
      </div>
      <div class="text-content">
        <div class="title">
          <h1>Franchise Pre-requisites</h1>
        </div>
        <div class="desc">
          <ul>
            <li>
              AAA Location <br>
              FTV franchise should be located in a prime triple A location of the city.
            </li>
            <li>
              STRONG FINANCIAL BACKINGS.<br>
              All franchises must be able to show strong financial backings to ensure the success of
              the business.
            </li>
            <li>
              FRANCHISE INDUSTRY ATTRACTION.<br>
              All franchises must have attractions and likings towards the desired industry with a zeal
              to learn, explore and strive to succeed.
            </li>
            <li>
              STRONG DESIRE TO BE MORE.<br>
              Get rich, famous and successful.
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="brand-support">
      <div class="image-content">
        <div class="wrap">
          <img src="/assets/media/images/image -4.png" alt="">
        </div>
      </div>
      <div class="text-content">
        <div class="title">
          <h1>Brand Support</h1>
        </div>
        <div class="desc">
          <p>
            FashionTV gives 360 degree support to all our franchise partners. We help in all
            aspects ranging from location, architecture, staff recruitment to PR launch plan, social
            media marketing, auditing, cross marketing and more.
            Strategic planning which is very important for the success of any business, is worked on
            extensively by our team and franchise partners.
          </p>
        </div>
      </div>
    </section>
    <section class="enquiry-form">
      <div class="title-wrap">
        <h1>Enquiry Form</h1>
      </div>
      <div class="form-wrap">
        <div class="form-title">
          <h1>Get in touch</h1>
        </div>
        <div class="form-content">
        <form action="franchise.php" method="POST">
          <div class="name-text">
            <input type="text" name="name" placeholder="Enter Your Name">
          </div>
          <div class="number-text">
            <input type="number" name="number" placeholder="Enter Your Name">
          </div>
          <div class="message-text">
            <textarea name="" placeholder="Enter Your Message"></textarea>
          </div>
          <div class="submit-btn">
            <input type="submit" value="Submit">
          </div>
        </form>
        </div>
      </div>
    </section>
  </main>
  <?php include "includes/_footer.php"; ?>
</body>

</html>