stringtest = "TheQuickBrownFoxJumpsOverTheLazyDog"
stringtest = stringtest.match(/[A-Z][a-z]+/g).join(" ").toLowerCase();
result = stringtest.charAt(0).toUpperCase() + stringtest.slice(1)
console.log(result)
