!function(){tinymce.create("tinymce.plugins.tr",{init:function(t,n){t.addButton("content_types",{type:"menubutton",text:"Innehållstyper",icon:!1,menu:[{text:"Informationsruta med blå bakgrund",onclick:function(){var t=tinyMCE.activeEditor.selection.getContent();tinyMCE.activeEditor.selection.setContent('<div class="infobox--background">'+t+"</div>")}},{text:"Informationsruta med blå ram",onclick:function(){var t=tinyMCE.activeEditor.selection.getContent();tinyMCE.activeEditor.selection.setContent('<div class="infobox--border">'+t+"</div>")}},{text:"Målgruppsanpassat innehåll - Barn/ungdom",onclick:function(){var t=tinyMCE.activeEditor.selection.getContent();tinyMCE.activeEditor.selection.setContent('<div class="infobox--children"><header class="infobox__header">Ange målgrupp</header><div class="infobox__content">'+t+"</div></div>")}},{text:"Målgruppsanpassat innehåll - Äldre",onclick:function(){var t=tinyMCE.activeEditor.selection.getContent();tinyMCE.activeEditor.selection.setContent('<div class="infobox--elderly"><header class="infobox__header">Ange målgrupp</header><div class="infobox__content">'+t+"</div></div>")}}]})},createControl:function(t,n){return null},getInfo:function(){return{longname:"Terapirekommendatioenr Buttons",author:"Sebastian",version:"0.1"}}}),tinymce.PluginManager.add("tr",tinymce.plugins.tr)}();