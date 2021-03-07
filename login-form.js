// Get form's DOM object
var f = document.querySelector('#signup');
f.addEventListener('submit', e => {

  // Stop submitting form by itself
  e.preventDefault();

  // Try sign-in with AJAX
  fetch('/signin', {
    method: 'POST',
    body: new FormData(e.target),
    credentials: 'include'
  }).then(res => {
    if (res.status == 200) {
      return Promise.resolve();
    } else {
      return Promise.reject('Sign-in failed');
    }
  }).then(profile => {

    // Instantiate PasswordCredential with the form
    if (window.PasswordCredential) {
      var c = new PasswordCredential(e.target);
      return navigator.credentials.store(c);
    } else {
      return Promise.resolve(profile);
    }
  }).then(profile => {

    // Successful sign-in
    if (profile) {
      updateUI(profile);
    }
  }).catch(error => {

    // Sign-in failed
    showError('Sign-in Failed');
  });
});