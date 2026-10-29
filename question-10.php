
<script>
  function validateEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}


console.log(validateEmail("user@example.com"));          
console.log(validateEmail("john.doe_123@my-domain.in"));
console.log(validateEmail("invalid-email"));             
console.log(validateEmail("user@example"));              
console.log(validateEmail("user@.com"));               
</script>