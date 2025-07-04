@extends('layouts.app')

@section('title', 'الأسئلة الشائعة')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">الأسئلة الشائعة</h1>

    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ما هي خدمة Beauty Booking؟
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    هي منصة لحجز الخدمات التجميلية من الصالونات والمراكز بسهولة.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    هل يمكنني إلغاء الحجز؟
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                 data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    نعم، يمكنك إلغاء الحجز قبل موعده بساعتين على الأقل.
                </div>
            </div>
        </div>

        <!-- ممكن تزود أسئلة تانية هنا -->
    </div>
</div>
@endsection
