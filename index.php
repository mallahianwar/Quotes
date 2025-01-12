<?php
// List of quotes with their writers
$quotes = [
    ["quote" => "الطموح هو طريق النجاح، لكن الاستمرار هو العربة التي تقودك إليه.", "author" => "ديل كارنيجي"],
    ["quote" => "الجودة تعني القيام بالأشياء بشكل صحيح حتى عندما لا يراقبك أحد." , "author" => "هنري فورد"],
    ["quote" => "عندما تعمل بحب، يصبح عملك فنًا.", "author" => "خليل جبران"],
    ["quote" => "الأفكار العظيمة تبدأ دائمًا بخطوة صغيرة.", "author" => "نابليون هيل"],
    ["quote" => "كن أنت التغيير الذي تريد أن تراه في العالم.", "author" => "مهاتما غاندي"],
    ["quote" => "الشجاعة هي بداية كل نجاح.", "author" => "ولفغانغ غوته"],
    ["quote" => "التفاصيل الصغيرة هي ما تصنع الفرق الكبير.", "author" => "ستيف جوبز"],
    ["quote" => "لا تتوقف عن التعلم، لأن الحياة لا تتوقف عن التعليم.", "author" => "ألبرت أينشتاين"],
    ["quote" => "المثابرة تتفوق على الموهبة.", "author" => "جون ماكسويل"],
    ["quote" => "الإبداع يأتي عندما تكون لديك حرية التجربة.", "author" => "بيكاسو"],
    ["quote" => "التحديات هي التي تكشف قوتك الحقيقية.", "author" => " أوبرا وينفري"],
    ["quote" => "ما تزرعه اليوم، ستحصده غدًا.", "author" => "براين تريسي"],
    ["quote" => "النجاح لا يأتي إلا لمن يؤمنون به.", "author" => "فينس لومباردي"],
    ["quote" => "كل شيء ممكن إذا كنت تؤمن بنفسك.", "author" => "والتر إليوت"],
    ["quote" => "إذا لم تخطط، فأنت تخطط للفشل.", "author" => "بنجامين فرانكلين"],
    ["quote" => "البساطة هي المفتاح للأناقة الحقيقية.", "author" => "كوكو شانيل"],
    ["quote" => "افعل ما تحب، ولن تعمل يومًا في حياتك.", "author" => "كونفوشيوس"],
    ["quote" => "من يلاحق الكمال، يفوت الجيد.", "author" => "فولتير"],
    ["quote" => "الإلهام موجود، لكنه يجب أن يجدك تعمل.", "author" => "بابلو بيكاسو"],
    ["quote" => "لا تترك خوفك يمنعك من المحاولة.", "author" => "نيلسون مانديلا"],
    ["quote" => "الأفكار القوية بحاجة إلى التنفيذ الجريء.", "author" => "توماس إديسون"],
    ["quote" => "الحياة مغامرة أو لا شيء على الإطلاق.", "author" => "هيلين كيلر"], 
    ["quote" => "من الأفضل أن تفشل في الأصالة على أن تنجح في التقليد.", "author" => "هرمان ميلفيل"],
    ["quote" => "ابتكر، لا تقلّد.", "author" => "جورج برنارد شو"],
    ["quote" => "الأرقام مهمة، لكن الأثر أهم.", "author" => "سيمون سينك"],
    ["quote" => "كل نجاح بدأ بفكرة بسيطة.", "author" => "مارك زوكربيرغ"],
    ["quote" => "لا تخف من الفشل، فهو مجرد درس.", "author" => "ريتشارد برانسون"],
    ["quote" => "ركز على القيمة، والباقي سيتبع.", "author" => "جيف بيزوس"],
    ["quote" => "التغيير يبدأ بخطوة شجاعة.", "author" => "مارتن لوثر كينغ الابن"],

  ];

// List of background colors
$colors =['#EA4284','#FFB100','#8245F5','#52B4F5','#FF5733','#3498DB','#2ECC71','#8E44AD','#F39C12'];
// Select a random quote and background color
$randomQuote = $quotes[array_rand($quotes)];
$randomColor = $colors[array_rand($colors)];


?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
      <title>اقتباسات </title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <style>
        @font-face {
    font-family: 'CustomHeading';
    src: url('font/Ubuntu-Arabic_R.ttf') format('embedded-opentype'), /* Internet Explorer */
         url('font/Ubuntu-Arabic_R.ttf') format('woff2'),             /* Super Modern Browsers */
         url('font/Ubuntu-Arabic_R.ttf') format('woff'),              /* Pretty Modern Browsers */
         url('font/Ubuntu-Arabic_R.ttf') format('truetype'),          /* Safari, Android, iOS */
         url('font/Ubuntu-Arabic_R.ttf') format('svg');               /* Legacy iOS */
}
        body {
            box-sizing: border-box;
            font-family: CustomHeading;
            margin: 0;
            padding: 100px !important;
            height: 100vh;
            display: flex;
            justify-content: center;
            /*align-items: center;*/
            text-align: center;
            color: #fff;
            background-color: <?php echo $randomColor; ?>;
        }
        
        .quote {
            font-size: 8.5rem;
            font-weight: bolder;
            font-style: italic;
            margin-bottom: 10px;
        }
        @media (min-width:1025px)  { 

            .quote {
                font-size: 4rem;}
        }
        .author {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .barcode img {
            margin-top: 20px;
        }
    
    </style>
</head>
<body>
    <div class="container">
        <p style="text-align:left">
            <img src="images/comment.png">
        </p>

        <div class="quote">

            "<?php echo $randomQuote['quote']; ?>"
        </div>
        <div class="author" style="text-align:left">
            - <?php echo $randomQuote['author']; ?>
        </div>
        <p style="text-align:right">
            <img src="images/quote-right.png">
        </p>


    </div>
</body>
</html>
