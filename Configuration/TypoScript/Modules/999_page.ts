 
// Logo
 
vars.logo < styles.content.get
vars.logo.select {
    where = colPos = 0
    orderBy = sorting
    languageField = sys_language_uid
    
}
vars.logo.slide = -1
 
 // Inhalt
vars.inhalt < styles.content.get
vars.inhalt.select {
    where = colPos = 1
    orderBy = sorting

    languageField = sys_language_uid
    
}

page = PAGE 
page {

    config{
        contentObjectExceptionHandler = 0
        frontend_editing=1
    }
    10 = FLUIDTEMPLATE
    10 {
        templateName=Default
        partialRootPaths{
            10 = EXT:heiner/Resources/Private/Partials

        }
          templateRootPaths{
            10 = EXT:heiner/Resources/Private/Templates

        }
          layoutRootPaths{
            10 = EXT:heiner/Resources/Private/Layouts

        }

        variables < vars
        variables {
            layout = TEXT
            layout.value.field = backend_layout
            layout.value.ifEmpty.data = levelfield:-2, backend_layout_next_level, slide
            
            logo = CONTENT
            logo {
                table = tt_content
                select.where = colPos = 0
                orderBy = sorting
                select.languageField = sys_language_uid
            }
            
            layout = TEXT
            layout.field=layout
 
      
            inhalt=CONTENT
            inhalt {
                table = tt_content
                select.where = colPos = 1
                orderBy = sorting
               
     
                select.languageField = sys_language_uid
               
            }
            
           
 

        }
    }

 
    includeCSS {
      10=EXT:heiner/Resources/Public/Css/agency4.css
       
        30=EXT:heiner/Resources/Public/Css/structure.css
         40=EXT:heiner/Resources/Public/Css/custom.css
          50=EXT:heiner/Resources/Public/Css/global.css
            60=EXT:heiner/Resources/Public/Css/el_demo.css

    }
 
    includeJS {
              
     }
 
   
    includeJSFooter {
   10=EXT:heiner/Resources/Public/js/jquery-2.1.4.min.js
               20=EXT:heiner/Resources/Public/js/mfn.menu.js
       
         30=EXT:heiner/Resources/Public/js/jquery.plugins.js
      40=EXT:heiner/Resources/Public/js/jquery.jplayer.min.js
          50=EXT:heiner/Resources/Public/js/animations/animations.js
        60=EXT:heiner/Resources/Public/js/translate3d.js
            70=EXT:heiner/Resources/Public/js/email.js
       
      
  
   
        
            90=EXT:heiner/Resources/Public/js/scripts.js
 
      100=EXT:heiner/Resources/Public/js/el_demo.js
   }
 
}


// default/general configuration (will add 'children_<colPos>' variable to processedData for each colPos in container
tt_content.b13-2cols-with-header-container < lib.contentElement
tt_content.b13-2cols-with-header-container {
    templateName = 2ColsWithHeader
    templateRootPaths {
        10 = EXT:heiner/Resources/Private/Templates
    }
    dataProcessing {
        100 = B13\Container\DataProcessing\ContainerProcessor
    }
}

// if needed you can use ContainerProcessor with explicitly set colPos/variable values
tt_content.b13-2cols-with-header-container < lib.contentElement
tt_content.b13-2cols-with-header-container {
    templateName = 2ColsWithHeader
    templateRootPaths {
        10 = EXT:heiner/Resources/Private/Templates
    }
    dataProcessing {
        200 = B13\Container\DataProcessing\ContainerProcessor
        200 {
            colPos = 200
            as = children_200
        }
        201 = B13\Container\DataProcessing\ContainerProcessor
        201 {
            colPos = 201
            as = children_201
        }
        202 = B13\Container\DataProcessing\ContainerProcessor
        202 {
            colPos = 202
            as = children_202
        }
    }
}

lib.contentElement {
    templateRootPaths.200 = EXT:heiner/Resources/Private/Templates/
    layoutRootPaths.200 = EXT:heiner/Resources/Private/Layouts/
    partialRootPaths.200 = EXT:heiner/Resources/Private/Partials/
}

tt_content {
    portfolio_list2 =< lib.contentElement
    portfolio_list2 {
        templateName = NewContentElement
    }
}

// tt_content {
//    heiner_newcontentelement =< lib.contentElement
//    heiner_newcontentelement {
//       templateName = Default
//       table = tt_content
//    select {
//       pidInList = this
//       where = colPos = 1
//       orderBy = sorting
      
       
 
//       }
//        renderObj =< tt_content
  
// }
// }

tt_content {
   portfolio_list2 =< lib.contentElement
   portfolio_list2 {
      templateName = NewContentElement
      dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
      dataProcessing.10 {
         as = images
         references.fieldName = image
         references.table = tt_content
         sorting = title
         sorting.direction = descending
       
 
      }
   }
}
