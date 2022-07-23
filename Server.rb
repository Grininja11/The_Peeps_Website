require 'socket'
require 'test/unit'

class Server< Test::Unit::TestCase
  def Client
    server = TCPSocket.open('locolhost', 4242)

  end
end