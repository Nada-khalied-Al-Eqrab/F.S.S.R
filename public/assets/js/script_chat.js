const faqResponses = {
  "هل يمكن تسجيل المواد الدراسية من تلك المنصة ؟" : " 🤖لا  يمكنك تسجيل المواد الدراسية من تلك المنصة عليك الدخول على منصة تسجيل المواد من خلال الرابط التالى : https://csds.cu.edu.eg/ISSR_Student/ ",
  "هل يمكننى الاطلاع على منهج المواد الاخرى التى لم اسجلها؟": " 🤖نعم بالطبع ، يمكنك الاطلاع على اى منهج دراسى خاص بأى مادة فى  تخصص دبلومتك او اى دبلومة اخرى على المنصة . ",
  "كيف يمكننى التواصل مع دكتور المادة؟": " 🤖يمكنك التواصل مع دكتور المادة من خلال ، الدخول على صفحة المادة و الدخزل منها على شات المادة و تستطيع ان ترسل اى رسالة ، او يمكنك الاطلاع على معلومات الدكتور مثل رقم هاتفة او مكان مكتبة و تتواصل معة مباشرة. ",
  "هل يمكننى التسجيل مع دكتور مشروع التخرج من تلك المنصة؟": " 🤖تعرض المنصة الدراسية معلومات عن مشاريع التخرج و عن الدكاترة المشرفين على المشاريع فى كل عام ، واذا اردت ان تختار مشرف من الدكاترة على مشروعك عليك بالتواصل المباشر عهم من داخل الكلية ، و توفر لك المنصة معلومات التواصل مع المشرف مثل رقم هاتفة و مكان مكتبة . ",
  "هل يمكننى معرفة نتيجة الامتحانات من على تلك المنصة؟": " 🤖لا ، اذا اردت معرفت نتيجتك الدراسية او اماكن الامتحانات يجب زيارت المنصة التالية : https://csds.cu.edu.eg/ISSR_Student/",
  "هل يمكننى التواصل مع شئون الطلاب؟": " 🤖 لا ، يمكنك التواصل معهم مباشرةبالكلية ، او الانضمام الى جروب التليجرام التالى : https://t.me/+xvmkPQPWiy4xMmQ0"
};

window.onload = () => {
  const chatBox = document.getElementById('chat-box');
  if (chatBox) {
    chatBox.innerHTML += `<div class="message bot">مرحبًا! اختر سؤالًا من الأسئلة الشائعة</div>`;
    Object.keys(faqResponses).forEach(question => {
      chatBox.innerHTML += `<div class="message bot"><button onclick="handleOptionClick('${question}')">${question}</button></div>`;
    });
  }
};

function handleOptionClick(question) {
  const chatBox = document.getElementById('chat-box');
  chatBox.innerHTML += `<div class="message user">${question}</div>`;
  const botReply = faqResponses[question];
  setTimeout(() => {
    chatBox.innerHTML += `<div class="message bot">${botReply}</div>`;
    chatBox.scrollTop = chatBox.scrollHeight;
  }, 500);
}

function sendMessage() {
  const input = document.getElementById('user-input');
  const chatBox = document.getElementById('chat-box');
  const userMessage = input.value.trim();

  if (userMessage === '') return;

  chatBox.innerHTML += `<div class="message user">${userMessage}</div>`;
  const botReply = faqResponses[userMessage] || "عذرًا، لا أملك إجابة لهذا السؤال حاليًا.";
  setTimeout(() => {
    chatBox.innerHTML += `<div class="message bot">${botReply}</div>`;
    chatBox.scrollTop = chatBox.scrollHeight;
  }, 500);

  input.value = '';
}

function toggleChat() {
  const container = document.getElementById('chat-container');
  const toggle = document.getElementById('chat-toggle');
  if (container.classList.contains('hidden')) {
    container.classList.remove('hidden');
    toggle.style.display = 'none';
  } else {
    container.classList.add('hidden');
    toggle.style.display = 'flex';
  }
}
