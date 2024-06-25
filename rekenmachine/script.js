function appendToResult(value) {
    document.getElementById('result').value += value;
  }
  
  function calculateResult() {
    var result = document.getElementById('result').value;
    var calculatedResult = eval(result);
    document.getElementById('result').value = calculatedResult;
  }
  
  function clearResult() {
    document.getElementById('result').value = '';
  }
  