@extends('layouts.home')
@section('title','الصفحة الرئيسية')
@section('content')
<div class="members">
<div class="mem-img"><img src="{{asset('Home/upload/Frame 101308.png')}}" alt=""></div>
<div class="mem-cont"><h1>تعليم لغة</h1>
<h1>الاشارة</h1>
<div class="spae">
 <div>
   معا لمستقبل اسهل في التواصل اسهل في التعلم 
 </div>
<div>
 معا لمستقبل متفاهم و متطور لنا وللاجيال القادمة
</div>
</div>
</div>
</div>
<div class="moo">
<h2>الاقسام</h2>
<div>الاقسام المتاحه من لغة الاشارة</div>
<div>الحروف العربية-الارقام-التعارف-الاسرة-الاذكار و الدين</div>
</div>
<div class="mooo">
  @foreach ($departments as $department)
  <a href="{{route('course.department.create',['id' => $department->id])}}" style="padding:20px;">
    <img src="{{ asset($department->img) }}" alt="">
  </a>
  @endforeach

</div>
<div class="dates">
<div class="date1">
 <div class="date1-img">
   <img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.30.38_b60341db.jpg')}}" alt="">
 </div>
 <div class="date1-cont">
   <h2>تاريخ لغة الإشارة        </h2>
   التاريخ الموثق للغة الإشارة في المجتمعات الغربية يمتد منذ القرن السادس عشر، إذ تعتبر واحدة من أقدم اللغات. وتستند لغة الإشارة إلى مجموعة من الإيماءات التقليدية، تتمثل في الإشارة بالأصابع لتمثيل الحروف الأبجدية الإنجليزية. وتعتمد لغة الإشارة عادةً على مجموعة كاملة من الحركات، وليس فقط الأيدي، لتعبر عن لغات طبيعية، تختلف في البناء والنحو، وتكون شفوية ويدوية لهم، فتستخدم من قبل الصم للتواصل.
   <div class=" position" style="height: 9%;">قراءة المزيد</div>
 </div>

</div>
<div class="date2">
<div class="date2-img">
<img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.30.38_a914312d.jpg')}}" alt="">
</div>
<div class="date2-cont">
<h2>تطور لغة الإشارة
</h2>
تواجدت لغة الإشارة منذ أن تواجد الصم في العالم، حيث بدأت لغة الإشارة في القرن السابع عشر في إسبانيا ومدريد في العام 1620، وأول كتاب وثّقها حمل عنوان (اختصار الرسائل والفن الأبجدي باليد)، مما غيّر هذا أول توثيق مكتوب للغة الإشارة.
أصبحت وسيلة التعليم البصري للأطفال الصم، بحركات الأيدي، إذ أنها تعكس نموذجًا كاملًا للغة الإنجليزية، لتسهيل التواصل مع الآخرين.
<div class=" position " style="height: 9%;">قراءة المزيد</div>
</div>
</div>
</div>
<div class="levels">
<div class="level">

 <a class="level-1" href="{{route('course.level.create',['id'=>1])}}">
   <div class="level-order">1</div>
   <h3>المستوى الأول
   </h3>
   Introduction copy lorem ipsum dolor sit amet consectetur adipiscing
 </a>
 <a class="level-1" href="{{route('course.level.create',['id'=>2])}}">
   <div class="level-order">2</div>
   <h3>المستوى الثاني
   </h3>
   Introduction copy lorem ipsum dolor sit amet consectetur adipiscing
 </a>
 <a class="level-1" href="{{route('course.level.create',['id'=>3])}}">
   <div class="level-order">3</div>
   <h3>المستوى الثالث
   </h3>
   Introduction copy lorem ipsum dolor sit amet consectetur adipiscing
 </a>
 <a class="level-1" href="{{route('course.level.create',['id'=>4])}}">
   <div class="level-order">4</div>
   <h3>المستوى الرابع
   </h3>
   Introduction copy lorem ipsum dolor sit amet consectetur adipiscing.

 </a>
</div></div>
<div class="mcontent">
 <div class="pictuers">
   <div class="pictures-img">
   <img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.32.39_17579e80.jpg')}}" alt="">
   </div>
   <div class="pictures-img">
     <img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.32.38_14add40b.jpg')}}" alt=""></div>

   </div>

<div class="pic-content">
<h2>تعلم لغة الإشارة</h2>
<div>
1- البحث عن موارد تعليمية: يمكنك البحث عن كتب أو دورات تعليمية عبر الإنترنت التي تشرح لك كيفية استخدام لغة الإشارة.

</div>
<div>
2- البحث عن مجتمعات للصم وضعاف السمع: يمكنك العثور على منظمات أو مراكز تقدم تعليم لغة الإشارة للأشخاص الصم. أو قم بتنظيم فريق لتعلم اللغة مع أصدقائك.

</div>
<div>
3- ممارسة اللغة الإشارة: يمكنك البحث عن فرص ممارسة اللغة الإشارة من خلال حضور مجتمعات الصم وضعاف السمع، أو الانضمام إلى مجموعات تعلم اللغة عبر الإنترنت.

</div>
<div>
4- الانضمام إلى دورات تعليمية عبر الإنترنت: يمكنك التحصيل على شهادة تعليمية في هذه اللغة. يمكنك الاستماع إلى الدروس والتفاعل مع المعلمين والطلاب عبر الإنترنت

</div>


</div>

<div class="teach">

<div class="teach-pic">
<div class="rate">
   <h3>
نسبة تعلم لغة الاشارة
   </h3>
   <div class="rate-cont">
   <div class="rate-num">
     <div class="rate-number">
       57M
     </div>
     <div class="rate-number">
       16.02%
     </div>
   </div>
   <div class="rate-num-con">
     <div>
المجتاز
     </div>
     <div>
سنة 2007
     </div>
   </div>
   </div>

 </div>
 <div class="teach-img">
<img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.30.39_0ed30088.jpg')}}" alt="">
 </div>
</div>
<div class=" teach-cont1">
<div class="teach1">
 <div class="teach1-con">
<h3>تحسين تطور الكلام واللغة
</h3>
لقد ثبت أن الأطفال الذين يحصلون على لغة الإشارة يطورون مهارات الكلام واللغة بشكل أسرع. تسمح لغة الإشارة للأطفال بفهم وتوضيح الأفكار، مما يمكن الكلام من التطور بشكل أكثر طبيعية. كما أن تعلم الإشارة يمكن أن يكون مفيدًا للأطفال الصم وضعاف السمع، لأنه يمنحهم وسيلة لفهم معنى الكلمات قبل أن يتمكنوا من نطق الكلمة.

 </div>
<div class="teach1-img">
<img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.30.39_af91b22b.jpg')}}" alt="">
</div>
</div>
<div class="teach1">
 <div class="teach1-con">
<h3>تعزيز التطور المعرفي
</h3>
اللغة الإشارية تلعب دورًا هامًا في تحسين التفكير، والاستدلال، وحل المشكلات. وقد أظهرت الدراسات أن الأطفال الذين يتعلمون لغة الإشارة لديهم مهارات معرفية أعلى، ويمكن أن يعزز تعلم لغة الإشارة المرونة الذهنية والقدرة على التحليل والتفكير النقدي.

 </div>
<div class="teach1-img">
<img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.30.39_af91b22b.jpg')}}" alt="">
</div>
</div>
<div class="teach1">
 <div class="teach1-con">
<h3>تعزيز التنمية الاجتماعية والعاطفية
</h3>
المهارات الاجتماعية والعاطفية ضرورية في التفاعل مع الآخرين، وقد أثبتت الدراسات أن الأطفال الذين يتعلمون لغة الإشارة لديهم قدرة أكبر على التعبير عن مشاعرهم والتفاعل بشكل فعال مع أقرانهم وأفراد أسرهم. كما أن تعلم الإشارة منذ الصغر يمكن أن يعزز من بناء علاقات أقوى مع الآخرين والتفاعل بشكل أفضل مع المجتمع
 </div>
<div class="teach1-img">
<img src="{{asset('Home/upload/WhatsApp Image 2025-03-05 at 16.30.39_af91b22b.jpg')}}" alt="">
</div>
</div>
</div>
</div>

</div>

<div class="main1">
<div class="teach-cont">
<h2>أساسيات لغة الإشارة
</h2>

صممت دورة أساسيات لغة الإشارة لتمكن المشاركين من المفاهيم الأساسية الخاصة بذوي الاحتياجات السمعية ولغة الإشارة والمصطلحات الأساسية بهدف النطق، بالإضافة لتنمية المهارات المعرفية وتطوير الجوانب العملية لدى المشاركين لتعزيز التواصل الفعال بلغة الإشارة. كما تهدف الدورة إلى تمكين المشاركين من تطبيق الإشارات الأولية والتفاعل بها في المجال العلمي والعملي بين المشاركين وفئة الصم في المجتمع.
<div class="position">
قراءة المزيد
</div>  
</div>
<div class="teach7">

</div>
</div>
<div class="final">
<div class="fin-cont">
<h2>    استمع الي احدث ما لدينا </h2>

اشترك للحصول علي الاخبار لسماعها 
<input type="email" placeholder="ادخل بريدك االكتروني">
<div class=" position1">تسجيل الدخول</div>
</div>
<div class="fin-cont">
<h2>نصحة الخبراء</h2>
اشترك ليصلك كل جديد في كل لحظة 
<div class=" position1"> انصل بنا</div>
</div>
</div>
@endsection