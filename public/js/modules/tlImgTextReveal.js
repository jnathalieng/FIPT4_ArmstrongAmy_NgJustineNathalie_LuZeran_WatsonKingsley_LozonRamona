export function tlImgTextReveal() {
    
    console.log("1 testing");

    const iboxText = document.querySelectorAll(".tl-ibox-p");
    console.log("2. text elements found:", iboxText.length);

    const textHeight = iboxText[0].scrollHeight;
    console.log("3. textheight:", textHeight);

    const hoverImg = document.querySelectorAll(".tl-ibox-img");
    console.log("4. image con found:", hoverImg.length);
    
    hoverImg.forEach((img) => {
        console.log("5. adding events to img con")

        img.addEventListener('mouseenter', () => {
            console.log("6. mouse entered");

            img.style.transform = `translate(-1rem, ${-textHeight}px)`;
        });

        img.addEventListener('mouseleave', () => {
            console.log("7. mouse leave works");

            img.style.transform = '';
        });
    });

    console.log("8 all checks completed");
};
