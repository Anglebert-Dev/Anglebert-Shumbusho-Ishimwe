<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script async="" src="../../gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>



<script>
  document.addEventListener('DOMContentLoaded', function() {
    const constraints = {
      name: {
        presence: {
          allowEmpty: false,
          message: "^Please enter your name."
        }
      },
      email: {
        presence: {
          allowEmpty: false,
          message: "^Please enter your email."
        },
        email: {
          message: "^Please enter a valid email address."
        }
      },
      subject: {
        presence: {
          allowEmpty: false,
          message: "^Please enter the subject."
        }
      },
      message: {
        presence: {
          allowEmpty: false,
          message: "^Please enter your message."
        }
      }
    };

    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(event) {
      const formValues = {
        name: form.elements.name.value,
        email: form.elements.email.value,
        subject: form.elements.subject.value,
        message: form.elements.message.value
      };

      const errors = validate(formValues, constraints);

      if (errors) {
        event.preventDefault();
        Object.keys(errors).forEach(function(key) {
          const errorMessageElement = document.getElementById(`${key}-error`);
          if (errorMessageElement) {
            errorMessageElement.textContent = errors[key][0];
          }
        });
      }
    });
  });
</script>