page=PAGE
page{
    typeNum=0



    includeCSS{
        10=EXT:heiner/Resources/Public/Css/agency4.css
        20=EXT:heiner/Resources/Public/Css/custom.css
        30=EXT:heiner/Resources/Public/Css/structure.css
    }
    config{
        baseURL=/
        debug = 1
        contentObjectExceptionHandler = 0

    }
    meta{
        viewport = width=device-width, initial-scale=1, shrink-to-fit=no
        description {
            field = description
        }
            
        author {
            field = author
        }
            
            keywords {
                field = keywords
            }
            
            copyright = Heiner Giehl
    }

    10=FLUIDTEMPLATE
    10{
        templateName=Default
        layoutRootPaths{
        10 = EXT:heiner/Resources/Private/Layouts
        }
    partialRootPaths {
        10 = EXT:heiner/Resources/Private/Partials
    }
    templateRootPaths {
        10 = EXT:heiner/Resources/Private/Templates
    }
	variables{
		content0=CONTENT
		content0{
			table=tt_content 
			select.where=colPos=0
			select.orderBy=sorting
		}
	}

    // logo=TEXT
    // logo{
    //     value=BeAgency 4  - BeTheme
    //     stdWrap.typolink.parameter=t3://page?uid=2
    //     imageLinkWrap.enable =1
    //     imageLinkWrap.file =EXT:heiner/Resources/Public/Images/Logo.png

    // }

    }

}



