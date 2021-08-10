lib.footernav=HMENU
lib.footernav{
    wrap = <ul class="">|</ul>
    special=directory
    special.value=9

    1 = TMENU
    1{
        NO=1
        NO{
            allWrap=<li>|</li>
            stdWrap.SpecialChars=1
            ATagTitle.field= description // subtitle //title
        }
        CUR=1
        CUR < .NO
    
    }
}