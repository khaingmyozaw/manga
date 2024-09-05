<div class="w-full xs:h-96 sm:h-96 md:h-96 lg:h-[28rem] my-2 flex justify-center items-center bg-zeembi-gray">
    <div class="xs:w-full sm:w-full md:w-11/12 lg:w-10/12 h-full relative">
        <img src="{{ asset('images/what_new.jpeg') }}" alt="" class="w-full h-full object-cover object-center">
        <div class="w-full h-full p-4 absolute top-0 left-0 bg-zeembi-black/30 backdrop-opacity-10 backdrop-invert z-10">
            <x-title-component :content="'What\'s new?'" class="text-center"/>
            <div class="w-full flex lg:justify-center items-center mt-4 overflow-x-auto lg:overflow-hidden snap-x scroll-smooth">

                <x-card-component
                :thumbnail="'images/prototype.jpg'"
                :title="'I Am Carrying Gold From'"
                :chapter=0
                :viewer=0
                :desc="'Chapter 4: Can\’t let it end'"
                />

                <x-card-component
                :thumbnail="'images/prototype.jpg'"
                :title="'I Am Carrying Gold From'"
                :chapter=0
                :viewer=0
                :desc="'Chapter 4: Can\’t let it end'"
                />

                <x-card-component
                :thumbnail="'images/prototype.jpg'"
                :title="'I Am Carrying Gold From'"
                :chapter=0
                :viewer=0
                :desc="'Chapter 4: Can\’t let it end'"
                />

                <x-card-component
                :thumbnail="'images/prototype.jpg'"
                :title="'I Am Carrying Gold From'"
                :chapter=0
                :viewer=0
                :desc="'Chapter 4: Can\’t let it end'"
                />

                <x-card-component
                :thumbnail="'images/prototype.jpg'"
                :title="'I Am Carrying Gold From'"
                :chapter=0
                :viewer=0
                :desc="'Chapter 4: Can\’t let it end'"
                />
        
            </div>
        </div>
    </div>
</div>