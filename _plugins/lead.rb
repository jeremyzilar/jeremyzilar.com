module Jekyll
  class RenderLeadText < Liquid::Block

    def render(context)
      text = super
      "<p class='usa-intro'>#{text}</p>"
    end

  end
end

Liquid::Template.register_tag('lead', Jekyll::RenderLeadText)
