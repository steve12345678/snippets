<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Title</title>
<style>
body{
    background:#fff;
}
#content{
    display:grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: repeat(3,160px);
    grid-gap:2px;
    
    text-align:center;
    color:black;
    max-width:960px;
    margin: 0 auto;
}

#content div{
    border:solid 1px rgb(200,0,0,0.5);
    border-radius:27px;
    background:#ccc;
    padding:30px;
}
#content div:nth-child(even){
    background:#bbb;
    
}
</style>
</head>
<body>
<div id="content">
<div>1</div>
<div>2</div>
<div>3</div>
<div>4</div>
<div>5</div>
<div>6</div>
<div>7</div>
<div>8</div>
<div>9</div>
<div>10</div>
<div>11</div>
<div>12</div>
<div>13</div>
<div>14</div>
<div>15</div>

</div>


</body>
</html>