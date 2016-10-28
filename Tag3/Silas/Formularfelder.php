<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>DataInputs</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <section class="container">
    <br>
    <h1>Verschiedene Feldtypen</h1>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="vorname"id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pw1" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputNumber">Number</label>
        <input type="number" class="form-control" name="vorname"id="exampleInputNumber" placeholder="Number">
      </div>
      <div class="form-group">
        <label for="exampleInputMonth">Month</label>
        <input type="month" class="form-control" name="vorname"id="exampleInputMonth" placeholder="Month">
      </div>
      <div class="form-group">
        <label for="exampleInputWeek">Week</label>
        <input type="week" class="form-control" name="vorname"id="exampleInputWeek" placeholder="Week">
      </div>
      <div class="form-group">
        <label for="exampleInputDate">Date</label>
        <input type="date" class="form-control" name="vorname"id="exampleInputDate" placeholder="Date">
      </div>
      <div class="form-group">
        <label for="exampleInputAmount">Amount</label>
        <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
          <div class="input-group-addon">.00</div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleTextInput">TextArea</label>
        <textarea class="form-control" id="exampleTextInput" rows="5"></textarea>
      </div>
      <div class="">
        <label>CheckBoxes</label>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="">
            Option one is this and that&mdash;be sure to include why it's great
          </label>
        </div>
        <div class="checkbox disabled">
          <label>
            <input type="checkbox" value="" disabled>
            Option two is disabled
          </label>
        </div>
      </div>
      <label>RadioButtons</label>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
      <div class="radio disabled">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
          Option three is disabled
        </label>
      </div>
      <div class="">
        <label for="exampleTextInput">SelectList</label>
        <select class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="">
        <label for="exampleTextInput">SelectMultipleList</label>
        <select multiple class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox"> Check me out
        </label>
      </div>
      <button type="submit" value="" class="form-control btn btn-default">Absenden</button>
    </form>
  </section>
</body>
</html>
